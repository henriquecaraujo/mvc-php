<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../app/bootstrap.php';

use App\Libs\Helpers\Session\SessionHelper;

SessionHelper::start();

$app = new App\Core\App();
$app->run();
