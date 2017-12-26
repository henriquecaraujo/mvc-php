<?php

namespace App\Core;

use App\Core\Config;
use App\Libs\Services\Notification\NotificationHelper;

class Controller
{
    public $data;
    public $notifications;

    protected function view($view, array $data = [])
    {
        $this->data = $data;

        Config::set('path', config('path.base') . config('theme.path'));
        Config::set('views', config('path.base') . config('theme.views'));
        Config::set('assets', config('site.url') . config('theme.assets'));
        Config::set('core_assets', config('site.url') . 'public/');

        $view = config('views') . $view . '.phtml';

        require_once config('views') . 'index.phtml';
    }

}
