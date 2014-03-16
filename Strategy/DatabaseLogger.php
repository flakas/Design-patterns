<?php

class DatabaseLogger implements iLogger {

    public function __construct($server) {
        printf("Opening connection to the database server %s...\n", $server);
        $this->server = $server;
        // openConnectionToServer($server)
    }

    public function log($message) {
        // log to a general log table
        printf("[%s %s] %s\n", $this->server, date("Y-m-d H:i:s"), $message);
    }

    public function error($message) {
        // log to a general log table as well as error table
        $this->log(sprintf('ERROR: %s', $message));
    }

    public function info($message) {
        $this->log(sprintf('INFO: %s', $message));
    }

}
