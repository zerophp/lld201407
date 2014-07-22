<?php
// Lectura de configs
$configs=parse_ini_file('../application/configs/config.ini');
include ($configs['autoload']);

session_start();

$request = FrontControllerModel::getRequest();
FrontControllerModel::dispatch($request);




