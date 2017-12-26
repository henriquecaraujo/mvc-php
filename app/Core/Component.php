<?php

namespace App\Core;

class Component
{
    public static function render($name, $parameters = [])
    {
        $path = 'App\Components\\' . $name . '\Controller';
        $component = new $path($parameters);

        $component->render();

        return $component;
    }
}
