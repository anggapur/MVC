<?php

require_once __DIR__ . "/config/AutoLoader.php";

use config\routes\Router;
use app\controllers;


session_start();
$_SESSION['username']=  "Session Angga";

$kernel = new Router($_GET);
$controller = $kernel->getController();
$controller->ExecuteAction();