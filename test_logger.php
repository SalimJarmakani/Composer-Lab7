<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\AppLogger;

$logger = new AppLogger();


$logger->logInfo('This is an informational log entry.');
$logger->logError("This is an error log entry.");
