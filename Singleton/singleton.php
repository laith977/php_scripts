<?php

class Singleton
{
    protected static $instance = null;

    protected function __construct() {}

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}
