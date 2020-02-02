<?php

namespace App\Libs\Helpers\JsonParser;

/**
 * Controla a funções de codificação, validação e decodificação dos arquivos JSON
 */
class JsonService
{
    /**
     * @param string $type
     * return array
     */
    public function get($type = null)
    {
        if (!static::isValid($type)) {
            return array();
        }

        return static::decodeIt($type);
    }

    /**
     * @param type $name
     * @return boolean
     */
    private static function isValid($name)
    {
        $filepath = config('path.base') . config('path.json') . $name;

        if (!file_exists($filepath)) {
            return false;
        }

        if (json_last_error() != JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }

    /**
     * @param string $name
     * @return array
     */
    private static function decodeIt($name)
    {
        if (is_array($name)) {
            return json_decode($name, true);
        }

        return false;
    }

    public static function encodeIt($arr)
    {
        if (is_array($arr)) {
            return json_encode($arr, JSON_PRETTY_PRINT);
        }

        return false;
    }

    /**
     *
     * @param array $array
     * @return boolean
     */
    public static function dispatch($array)
    {
        header('Content-type: application/json');

        if (is_array($array)) {
            echo json_encode($array, JSON_PRETTY_PRINT);
            return true;
        }

        echo json_encode([]);
        return false;
    }

}
