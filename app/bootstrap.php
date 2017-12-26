<?php
date_default_timezone_set('America/Sao_Paulo');

require_once '../vendor/autoload.php';

use App\Core\Config;

foreach (require_once 'aliases.php' as $alias => $name) {
  class_alias($name, $alias);
}

Config::start();

require_once 'functions.php';
