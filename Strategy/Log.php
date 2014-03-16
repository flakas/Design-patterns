<?php

class Log {

    public function __construct(iLogger $logger) {
        $this->logger = $logger;
    }

    public function log($message) {
        $this->logger->log($message);
    }

    public function error($message) {
        $this->logger->error($message);
    }

    public function info($message) {
        $this->logger->info($message);
    }

    public function setLogger(iLogger $logger) {
        $this->logger = $logger;
    }

}
