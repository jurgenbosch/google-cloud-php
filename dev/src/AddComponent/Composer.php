<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\AddComponent;

use Google\Cloud\Dev\QuestionTrait;
use GuzzleHttp\Client;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use vierbergenlars\SemVer\SemVerException;
use vierbergenlars\SemVer\version;

/**
 * Creates and manages composer files.
 */
class Composer
{
    use PathTrait;
    use QuestionTrait;

    /**
     * @var QuestionHelper
     */
    private $questionHelper;

    /**
     * @var InputInterface
     */
    private $input;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var string
     */
    private $rootPath;

    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $info;

    /**
     * @var array
     */
    private $defaultDeps = [
        'google/gax'
    ];

    /**
     * @var array
     */
    private $defaultDevDeps = [
        "phpunit/phpunit" => "^4.8|^5.0|^8.0"
    ];

    /**
     * @var array
     */
    private $defaultSuggests = [
        'ext-grpc' => 'Enables use of gRPC, a universal high-performance RPC framework created by Google.',
        'ext-protobuf' => 'Provides a significant increase in throughput over the pure PHP ' .
            'protobuf implementation. See https://cloud.google.com/php/grpc for installation instructions.'
    ];

    public function __construct(
        QuestionHelper $questionHelper,
        InputInterface $input,
        OutputInterface $output,
        $rootPath,
        array $info
    ) {
        $this->questionHelper = $questionHelper;
        $this->input = $input;
        $this->output = $output;
        $this->rootPath = $rootPath;
        $this->path = $info['path'];
        $this->info = $info;
    }

    public function run()
    {
        $parts = explode('/', $this->path);
        $relativePath = array_pop($parts);

        $namespace = $this->ask(
            'Enter the component base namespace, relative to `Google\\Cloud\\`.',
            $relativePath
        );

        $gpbMetadataNamespace = $this->ask(
            'Enter the component metadata namespace, relative to `GPBMetadata\\`. ' .
            '(e.g. GPBMetadata\\Google\\Cloud\\FooBar). ' .
            'NOTE: This value is often subtly different from the component namespace. ' .
            'Be sure you correctly enter the value, taking care to correctly case characters.',
            'Google\\Cloud\\' . $relativePath
        );

        $this->updateMainComposer($namespace, $gpbMetadataNamespace, $relativePath);
        $this->createComponentComposer($namespace, $gpbMetadataNamespace, $relativePath);
    }

    private function updateMainComposer($namespace, $gpbMetadataNamespace, $relativePath)
    {
        $path = $this->rootPath .'/composer.json';
        $composer = json_decode(file_get_contents($path), true);

        // Add `replace` to main composer file.
        $composer['replace']['google/'. $this->info['name']] = 'main';
        ksort($composer['replace']);

        // Add namespaces to main composer file.
        $composer['autoload']['psr-4']['Google\\Cloud\\' . $namespace .'\\'] = $relativePath . '/src';
        $composer['autoload']['psr-4']['GPBMetadata\\' . $gpbMetadataNamespace .'\\'] = $relativePath . '/metadata';
        $composer['autoload-dev']['psr-4']['Google\\Cloud\\' . $namespace .'\\Tests\\'] = $relativePath . '/tests';

        ksort($composer['autoload']['psr-4']);
        ksort($composer['autoload-dev']['psr-4']);

        file_put_contents($path, json_encode($composer, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
    }

    private function createComponentComposer($namespace, $gpbMetadataNamespace, $relativePath)
    {
        $composer = [];
        $composer['name'] = 'google/'. $this->info['name'];
        $composer['description'] = $this->ask(
            'Enter a description for this component.',
            $this->info['display'] .' Client for PHP'
        );
        $composer['license'] = 'Apache-2.0';
        $composer['minimum-stability'] = 'stable';

        $composer['autoload']['psr-4'] = [
            'Google\\Cloud\\' . $namespace .'\\' => 'src',
            'GPBMetadata\\' . $gpbMetadataNamespace .'\\' => 'metadata'
        ];
        $composer['autoload-dev']['psr-4'] = [
            'Google\\Cloud\\' . $namespace .'\\Tests\\' => 'tests'
        ];

        $target = $this->ask(
            'Enter the remote repository target, relative to the hostname. ' .
            'For `git@github.com:foo/bar.git`, enter `foo/bar.git`.',
            'googleapis/google-cloud-php-'. str_replace('cloud-', '', $this->info['name']) .'.git'
        );

        $composer['extra']['component'] = [
            'id' => $this->info['name'],
            'path' => $relativePath,
            'target' => $target
        ];

        $composer['require-dev'] = [];
        foreach ($this->defaultDeps as $dep) {
            $composer['require'][$dep] = $this->getLatestVersion($dep);
        }

        $composer['require-dev'] = [];
        foreach ($this->defaultDevDeps as $dep => $ver) {
            $composer['require-dev'][$dep] = $ver;
        }

        $composer['suggest'] = [];
        foreach ($this->defaultSuggests as $dep => $val) {
            $composer['suggest'][$dep] = $val;
        }

        file_put_contents(
            $this->path .'/composer.json',
            json_encode($composer, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) . PHP_EOL
        );
    }

    private function getLatestVersion($dep)
    {
        $client = new Client;
        $uri = 'https://packagist.org/packages/'. $dep .'.json';
        $pkg = $client->request('GET', $uri);

        $versions = json_decode($pkg->getBody(), true)['package']['versions'];
        $def = null;
        foreach (array_keys($versions) as $v) {
            if (strpos($v, 'dev-') !== false) {
                continue;
            }

            try {
                $version = new version($v);
            } catch (SemVerException $e) {
                continue;
            }

            $def = sprintf(
                '^%d.%d.0',
                $version->getMajor(),
                $version->getMinor()
            );

            break;
        }

        return $def;
    }

    protected function questionHelper()
    {
        return $this->questionHelper;
    }

    protected function input()
    {
        return $this->input;
    }

    protected function output()
    {
        return $this->output;
    }
}
