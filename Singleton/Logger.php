<?php

/**
 * Logger class
 * Singleton using lazy instantiation
 */
class Logger
{
    private static $instance = NULL;
    private $logs;

    private function __construct() {
        $logs = array();
    }

    /**
     * Gets instance of the Logger
     * @return Logger instance
     * @access public
     */
    public function getInstance() {
        if(self::$instance === NULL) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    /**
     * Adds a message to the log
     * @param String $message Message to be logged
     * @access public
     */
    public function log($message) {
        $this->logs[] = $message;
    }

    /**
     * Returns array of logs
     * @return array Array of log messages
     * @access public
     */
    public function get_logs() {
        return $this->logs;
    }
};
