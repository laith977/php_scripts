<?php

require_once __DIR__ . '/Factory/sms_notification_factory.php';

$smsNotificationFactory = new SMSNotificationFactory();
$smsNotificationFactory->notify('Your order was shipped');
