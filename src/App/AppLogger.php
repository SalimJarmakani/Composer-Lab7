<?php

namespace App;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AppLogger
{
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger('appLogger');

        $this->logger->pushHandler(new StreamHandler(__DIR__ . "/../logs/app.log", LOG_DEBUG));
        $this->logger->pushHandler(new StreamHandler(__DIR__ . "/../logs/error.log", LOG_ERR));
    }

    public function logInfo($message)
    {
        $this->logger->info($message);
    }

    public function logError($message)
    {
        $this->logger->error($message);
    }
}
