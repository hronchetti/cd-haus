<?php

class Session{
    private static $instance;

    private function __construct(){
        // Starting / resuming the session
        // Define session save path here
        session_start();
    }

    public static function getSession() {
        // If session doesn't exist start new session
        if (!isset(self::$instance)) {
            self::$instance = new Session();
        }
        return self::$instance;
    }

    public function setProperty( $key, $val ) {
        /* don't need to check that session exists
           since if we're here we must have instantiated
           $instance and started the session */

        // Set provided $_SESSION variable ($key) to the given value ($val)
        $_SESSION[ $key ] = $val;
    }

    public function getProperty( $key ) {
        // Creating an empty variable
        $returnValue = "";

        if (isset($_SESSION[$key])) {
            // Retrieve given $_SESSION variable ($key) and store it's value in $returnedValue for use
            $returnValue = $_SESSION[$key];
        }
        return $returnValue;
    }
    // Create another function to unset the session
}