<?php

require_once '../app/bootstrap.php';

use App\Libs\Services\Session\SessionHelper;

SessionHelper::start();

$app = new App\Core\App();
$app->run();
