<?php

declare(strict_types=1);

namespace Training\LoggerExample\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Training\LoggerExample\Logger\Logger;

class Example extends Command{

    protected $logger;

    public function __construct(Logger $logger)
    {
        parent::__construct(null);
        $this->logger=$logger;
    }

    protected function configure(){
        parent::configure();
        $this->setName("logger:example:run");
        $this->setDescription("Run Logger Example");
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
        $output->write("By Hitansh Agrawal");
        $this->logger->info('Logger Example info');
    }
}