<?php

use App\Model\Hardware;
use App\Helper\Helpers;

require_once '../../vendor/autoload.php';

$hardware = new \App\Model\Hardware();
$hardwares = $hardware->delete($_GET["id_hardware"]);

header('Location: ../../views/hardware/show.php');
die();

?>