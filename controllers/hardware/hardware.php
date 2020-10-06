<?php

require_once '../../vendor/autoload.php';

$method = $_REQUEST['method'];

try {
    $controller = new \App\Controller\HardwareController();
    $controller->setAttributes($_REQUEST);
    $mensagem = $controller->$method();
} catch (\Throwable $th) {
    $th->getMessage();
    header('Location: ../../views/hardware/index.php');
    die();
}
header('Location: ../../views/hardware/index.php');
die();
