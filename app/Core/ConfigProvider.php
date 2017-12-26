<?php

namespace App\Core;

class ConfigProvider
{
    private static $config;
    private $configs = [];

    private function __construct()
    {
        $defaultConf = require_once dirname(dirname(__FILE__)) . '/config/app.php';
        $environmentConf = require_once dirname(dirname(__FILE__)) . '/config/' . $defaultConf['environment'] . '/app.php';

        $configs = array_merge($defaultConf, $environmentConf);

        $this->map($configs);
    }

    private function map($config = array(), $prefix = '')
    {
        if ($prefix !== '') {
            $prefix .= '.';
        }

        foreach ($config as $indice => $value) {
            if (!is_array($value)) {
                $this->configs[$prefix . $indice] = $value;

                continue;
            }

            $this->map($value, $prefix . $indice);
        }
    }

    public static function instance()
    {
        if (!isset(self::$config)) {
            self::$config = new ConfigProvider();
        }

        return self::$config;
    }

    public function getConfig($index)
    {
        if (isset($this->configs[$index])) {
            return $this->configs[$index];
        }

        return null;
    }

    public function setConfig($index, $val)
    {
        $this->configs[$index] = $val;
    }

    public function all()
    {
        return $this->configs;
    }

}
