<?php

require_once __DIR__ . '/notification.php';

class SMSNotification implements Notification
{
    public function send(string $message)
    {
        echo "Sending SMS: $message" . PHP_EOL;
    }
}
