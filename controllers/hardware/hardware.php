<?php

require_once '../../vendor/autoload.php';

$method = $_REQUEST['method'];

try {
    $controller = new \App\Controller\HardwareController();
    $controller->setAttributes($_REQUEST);
    $mensagem = $controller->$method();
} catch (\Throwable $th) {
    header('Location: ../../views/hardware/show.php');
    die();
}
header('Location: ../../views/hardware/show.php');
die();
