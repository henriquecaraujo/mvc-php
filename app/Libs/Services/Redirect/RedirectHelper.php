<?php

namespace App\Libs\Services\Redirect;

class RedirectHelper
{
    public static function go($controller)
    {
        header("Location: " . config('site.url') . $controller);
        
        return;
    }

    public static function url($controller)
    {
        echo config('site.url') . $controller;
    }

}
