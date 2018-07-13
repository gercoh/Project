<?php

use administration\controllers\IndexController;
use administration\Router;

try {
    $controller = Router::getInstance()->getController();
    $action = Router::getInstance()->getAction();

    if (class_exists($controller)) {
        $object = new $controller();
        if (method_exists($object, $action)) {
            echo $object->$action();
            exit;
        }
    }

    echo (new IndexController())->action404();
} catch (Exception $ex) {
    die($ex->getMessage());
}
