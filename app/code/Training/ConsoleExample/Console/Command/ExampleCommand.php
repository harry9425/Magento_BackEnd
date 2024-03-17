<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class ExampleCommand extends Command{
    protected function configure(){
        parent::configure();
        $this->setName("training:example:run");
        $this->setDescription("Training Console Example");
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
        $output->write("By Hitansh Agrawal");
    }
}