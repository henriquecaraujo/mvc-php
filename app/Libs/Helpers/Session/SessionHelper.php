<?php

namespace App\Libs\Helpers\Session;

/**
 * Serviço de ajuda para algorítimos de sessão
 */
class SessionHelper
{
    /**
     * @return void
     */
    public static function start()
    {
        if (!static::status()) {
            session_start();
        }
    }

    /**
     * @param String $index
     * @return void
     */
    public static function destroy($index = null)
    {
        if (!isset($index)) {
            if (static::status()) {
                session_destroy();
            }

            return;
        }

        unset($_SESSION[$index]);

        return true;
    }

    /**
     * @param String $index
     * @return mixed
     */
    public static function get($index = null)
    {
        $session = isset($_SESSION[$index]) ? $_SESSION[$index] : null;

        if (isset($session)) {
            return $session;
        }

        return $session;
    }

    /**
     * @param String $index, mixed $value
     * @return void
     */
    public static function set($index, $value = null)
    {
        $_SESSION[$index] = $value;
    }

    /**
     * @param String $index, Array $arr
     * @return void
     */
    public static function push($index, array $arr)
    {
        static::create($index);

        foreach ($arr as $key => $values) {
            $_SESSION[$index][$key] = $values;
        }
    }

    /**
     * @param String $index, Array $arr
     * @return bool
     */
    public static function status()
    {
        if (session_status() == PHP_SESSION_NONE) {
            return false;
        }

        return true;
    }

    /**
     * @param String $index
     * @return bool
     */
    public static function isEmpty($index)
    {
        if (!static::status()) {
            return null;
        }

        $session = static::get($index);

        if (empty($session)) {
            return true;
        }

        return false;
    }

    /**
     * @param type $index
     */
    public static function create($index)
    {
        $session = static::get($index);
        
        if (!isset($session)) {
            $_SESSION[$index] = [];
        }
    }
}
