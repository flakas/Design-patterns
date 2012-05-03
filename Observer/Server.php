<?php

require_once("Subject.php");

class Server implements Subject {

    private $observers = array();

    /**
     * Registers observer to the subject
     * @param object $observer Observer that will be registered
     * @return bool True if the observer has been attached, false otherwise
     * @access public
     */
    public function attach($observer) {
        if(!in_array($observer, $this->observers)) {
            $this->observers[] = $observer;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Unregisters observer from the subject
     * @param object $observer Observer that will be unregistered
     * @return bool True if the observer has been detached, false otherwise
     * @access public
     */
    public function detach($observer) {
        if(!in_array($observer, $this->observers)) {
            return false;
        } else {
            $key = array_search($observer, $this->observers);
            unset($this->observers[$key]);
            $this->observers = array_values($this->observers); //Reindex array after unset
            return true;
        }
    }

    /**
     * Notifies all observers with $message
     * @param stdClass $message Message that will be sent to observers
     * @access public
     */
    public function notify($message) {
        foreach($this->observers as $observer) {
            $observer->notify($message);
        }
    }
}
