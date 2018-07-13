<?php

define('BASE_PATH', __DIR__);
session_start();

require_once(__DIR__ . '/Autoload.php');
spl_autoload_register(['Autoload', 'loader']);

use application\Config;
$config = require_once(__DIR__ . '/configs/data-sources.php');
Config::getInstance()->load($config);

$isAdmin = stripos($_SERVER['REQUEST_URI'], '/admin') === 0;
$isAdmin ? require_once(__DIR__ . '/admin.php') : require_once(__DIR__ . '/site.php');
