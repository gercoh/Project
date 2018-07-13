<?php

use application\models\cv\database\DataModel;
use application\models\cv\CvPartsFactory;
use application\Template;

try {
    $dataModel = new DataModel();

    echo (new Template())->setLayout('web/layout')->render('web/cv', ['parts' => new CvPartsFactory($dataModel)]);
} catch (Exception $ex) {
    die($ex->getMessage());
}
