<?php

namespace App\Core;

use App\Core\ConfigProvider;

class Config
{
    public static function get($index)
    {
        $config = ConfigProvider::instance();

        return $config->getConfig($index);
    }

    public static function set($index, $value)
    {
        $config = ConfigProvider::instance();
        $config->setConfig($index, $value);
    }

    public static function all()
    {
        $config = ConfigProvider::instance();
        
        return $config->all();
    }

    public static function start()
    {
        ConfigProvider::instance();
    }
}
