<?php

require_once __DIR__ . '/../Product/notification.php';

abstract class NotificationFactory
{
    abstract public function create(): Notification;
}
