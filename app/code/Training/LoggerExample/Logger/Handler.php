<?php

declare(strict_types=1);

namespace Training\LoggerExample\Logger;
use Magento\Framework\Logger\Handler\Base;

class Handler extends Base {
    protected $logger=Logger::INFO;
    protected $filename='/var/log/logger-example.log';
}