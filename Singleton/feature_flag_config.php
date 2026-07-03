<?php
require_once 'singleton.php';

class FeatureFLagConfig extends Singleton
{
    private $config = [];

    protected function __construct()
    {
        parent::__construct();
        $this->config = $this->loadConfig();
    }

    private function loadConfig(): array
    {
        $configFile = __DIR__ . '/feature_flags.php';

        if (!file_exists($configFile)) {
            return [];
        }

        $config = require $configFile;

        return is_array($config) ? $config : [];
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function get(string $key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }

    public function isEnabled(string $flag): bool
    {
        return (bool) ($this->config[$flag] ?? false);
    }

    public function set(string $key, $value): void
    {
        $this->config[$key] = $value;
    }
}
