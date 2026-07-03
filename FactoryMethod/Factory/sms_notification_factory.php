<?php

require_once __DIR__ . '/notification_factory.php';
require_once __DIR__ . '/../Product/sms_notification.php';

class SMSNotificationFactory extends NotificationFactory
{
    public function create(): Notification
    {
        return new SMSNotification();
    }
}
