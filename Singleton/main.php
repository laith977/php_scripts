<?php

require_once 'feature_flag_config.php';
$start_time = microtime(true);

$featureFlagConfig = FeatureFLagConfig::getInstance();
echo 'Execution time: ' . (microtime(true) - $start_time) . ' seconds';

print_r($featureFlagConfig->getConfig());
