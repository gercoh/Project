<?php

define('BASE_PATH', __DIR__);

require_once(__DIR__ . '/Autoload.php');
spl_autoload_register(['Autoload', 'loader']);

use application\Config;
use application\models\cv\arrays\DataModel;
use application\models\cv\CvPartsFactory;
use application\Template;

try {
    $dataModel = new DataModel();
    $config = require_once(__DIR__ . '/application/configs/data-sources.php');
    Config::getInstance()->load($config);

    echo (new Template())->renderPartial('console/cv', ['parts' => new CvPartsFactory($dataModel)]);
} catch (Exception $ex) {
    die($ex->getMessage());
}
