<?php

require_once __DIR__ . '/Factory/email_notification_factory.php';
require_once __DIR__ . '/Factory/sms_notification_factory.php';

$smsNotificationFactory = new SMSNotificationFactory();
$smsNotification = $smsNotificationFactory->create();
$smsNotification->send('Your order was shipped');
