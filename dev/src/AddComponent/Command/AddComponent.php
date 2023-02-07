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

namespace Google\Cloud\Dev\AddComponent\Command;

use Google\Cloud\Dev\AddComponent\Composer;
use Google\Cloud\Dev\AddComponent\Contributing;
use Google\Cloud\Dev\AddComponent\GitAttributes;
use Google\Cloud\Dev\AddComponent\Info;
use Google\Cloud\Dev\AddComponent\License;
use Google\Cloud\Dev\AddComponent\PullRequestTemplate;
use Google\Cloud\Dev\AddComponent\Readme;
use Google\Cloud\Dev\AddComponent\TestConfig;
use Google\Cloud\Dev\Command\GoogleCloudCommand;
use Google\Cloud\Dev\QuestionTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Add a Component
 */
class AddComponent extends GoogleCloudCommand
{
    use QuestionTrait;

    private $input;
    private $output;

    protected function configure()
    {
        $this->setName('component')
            ->setDescription('Add a Component');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // this is gross.
        $this->input = $input;
        $this->output = $output;

        $formatter = $this->getHelper('formatter');

        $info = (new Info(
            $this->getHelper('question'),
            $input,
            $output,
            $this->rootPath
        ))->run();

        $output->writeln($formatter->formatSection(
            'License',
            'Creating LICENSE file by copying from repository base.'
        ));

        (new License($this->rootPath, $info['path']))->run();

        $output->writeln($formatter->formatSection(
            'Pull Request Template',
            'Creating .github/pull_request_template.md file by copying from template.'
        ));

        (new PullRequestTemplate($this->rootPath, $info['path']))->run();

        $output->writeln($formatter->formatSection(
            'Contributing Guide',
            'Creating CONTRIBUTING.md file by copying from template.'
        ));

        (new Contributing($this->rootPath, $info['path']))->run();

        $output->writeln($formatter->formatSection(
            'Git Attributes',
            'Creating .gitattributes file by copying from template.'
        ));

        (new GitAttributes($this->rootPath, $info['path']))->run();

        $output->writeln($formatter->formatSection(
            'Test Config',
            'Creating PHPUnit config by copying from template.'
        ));

        (new TestConfig($this->rootPath, $info['path']))->run();

        $output->writeln($formatter->formatSection(
            'Readme',
            'Creating README.md by copying from template.'
        ));

        $readme = new Readme(
            $input,
            $output,
            $this->rootPath,
            $info
        );
        $readme->run();

        $output->writeln($formatter->formatSection(
            'Composer',
            'The following questions allow us to properly configure the new component ' .
            'for use with PHP\'s package manager, Composer.'
        ));

        (new Composer(
            $this->getHelper('question'),
            $input,
            $output,
            $this->rootPath,
            $info
        ))->run();

        $output->writeln('');
        $output->writeln('');
        $output->writeln('Success!');
        $output->writeln(
            "All done! Before committing, be sure to complete the following manual steps:\n"
            . "1. Add a code sample to /path/to/Folder/README.md"
        );
    }

    protected function questionHelper()
    {
        return $this->getHelper('question');
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
