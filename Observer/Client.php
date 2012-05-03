<?php

require_once('Observer.php');

class Client implements Observer {
    private $lastState;

    /**
     * Accepts notifications from the subject
     * @param stdClass $message Message sent by the subject
     * @access public
     */
    public function notify($message) {
        if($message instanceof stdClass) {
            echo "I have received a message: \r\n";
            var_dump($message);
            echo "End of message. \r\n";
            $this->lastState = $message;
        } else {
            echo "I have received an incorrect message! \r\n";
            var_dump($message);
        }
    }
};
