<?php

namespace App\Libs\Services\InjectView;

/**
 * Serviço de ajuda para algorítimos de sessão
 */
class InjectView
{
    /**
     * @return void
     */
    public static function inject($injetar)
    {
        include_once config('views') . $injetar . ".phtml";
    }

}
