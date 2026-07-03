<?php

require_once __DIR__ . '/notification_factory.php';
require_once __DIR__ . '/../Product/email_notification.php';

class EmailNotificationFactory extends NotificationFactory
{
    public function create(): Notification
    {
        return new EmailNotification();
    }
}
