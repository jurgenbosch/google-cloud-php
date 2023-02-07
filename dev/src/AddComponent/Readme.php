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

use Google\Cloud\Dev\AddComponent\Command\AddComponent;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Write the README.md file for the component.
 */
class Readme
{
    const README_TPL = 'template-README.md.txt';

    use PathTrait;

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
     * @var array
     */
    private $info;

    /**
     * @var string
     */
    private $templatesPath;

    public function __construct(
        InputInterface $input,
        OutputInterface $output,
        $rootPath,
        array $info
    ) {
        $this->input = $input;
        $this->output = $output;
        $this->rootPath = $rootPath;
        $this->info = $info;

        $this->templatesPath = $this->rootPath .'/dev/src/AddComponent/templates';
    }

    public function run()
    {
        $this->createReadme($this->info['path']);
    }

    private function createReadme($path)
    {
        $files = $this->scanDirectory($path);
        if (!in_array('README.md', $files)) {
            $file = $path .'/README.md';
            $content = file_get_contents($this->templatesPath .'/'. self::README_TPL);

            $content = str_replace('{display}', $this->info['display'], $content);
            $content = str_replace('{homepage}', $this->info['cloudPage'], $content);
            $content = str_replace('{docspage}', $this->info['docsPage'], $content);
            $content = str_replace('{name}', $this->info['name'], $content);
            $content = str_replace('{client}', 'readme', $content);
            $content = str_replace('{directory}', strtolower(basename($this->info['path'])), $content);

            file_put_contents($file, $content);
        }
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
