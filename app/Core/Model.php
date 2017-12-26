<?php

namespace App\Core;

use \PDO;
use App\Core\Config;

class Model
{
    public static $instance;

    public function __construct()
    {
        $this->getInstance();
    }

    private static function getInstance()
    {
        try {
            static::$instance = new PDO(
              sprintf(
                '%s:host=%s;dbname=%s;chartset=%s',
                 Config::get('db.provider'),
                 Config::get('db.host'),
                 Config::get('db.name'),
                 Config::get('db.charset')
              ),
              Config::get('db.user'),
              Config::get('db.password')
            );
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    protected static function database()
    {
        if (!static::$instance) {
            static::getInstance();
        }

        return static::$instance;
    }

}
