<?php

namespace App\Core;

use App\Interfaces\ComponentInterface;

class Component
{
    public static function render(ComponentInterface $componentController)
    {
        return $componentController->render();
    }
}
