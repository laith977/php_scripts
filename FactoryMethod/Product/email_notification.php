<?php

require_once __DIR__ . '/notification.php';

class EmailNotification implements Notification
{
    public function send(string $message)
    {
        echo "Sending email: $message" . PHP_EOL;
    }
}
