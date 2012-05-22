<?php

// Include our Logger class
require_once 'Logger.php';

$logger = Logger::getInstance();
$logger->log("Logging the first message");
print_r($logger->get_logs());

// Using method chaining
Logger::getInstance()->log("Logging a second message");
print_r(Logger::getInstance()->get_logs());
