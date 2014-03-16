<?php

class STDOutLogger implements iLogger {

    public function log($message) {
        printf("[%s] %s\n", date("Y-m-d H:i:s"), $message);
    }

    public function error($message) {
        $this->log(sprintf('ERROR: %s', $message));
    }

    public function info($message) {
        $this->log(sprintf('INFO: %s', $message));
    }

}
