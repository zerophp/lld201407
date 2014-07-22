<?php
// Lectura de configs
$configs=parse_ini_file('../application/configs/config.ini');
include ('../application/autoload.php');

session_start();

$request = FrontControllerModel::getRequest();
FrontControllerModel::dispatch($request);




