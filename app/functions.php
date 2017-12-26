<?php

function debug($var, $exit = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";

    if ($exit) {
        exit();
    }
}

function config($index, $default = null) {
    $val = App\Core\Config::get($index);

    if (null === $val) {
        return $default;
    }

    return $val;
}

function assets($path) {
  echo config('site.url') . 'assets/' .  $path;
}

function route($controller)
{
  echo App\Libs\Services\Redirect\RedirectHelper::url($controller);
}
