<?php

declare(strict_types=1);

namespace Training\CronExample\Cron;

use Psr\Log\LoggerInterface;

class Example{

    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $log)
    {
        $this->logger=$log;
    }

    public function execute(){
        return;
        $this->logger->info('Starting running cron example');
        sleep(2);
        $this->logger->info('cron example finished');
    }
}