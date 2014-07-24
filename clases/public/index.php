<?php
// Lectura de configs
$configs=parse_ini_file('../application/configs/config.ini');
include ($configs['autoload']);

session_start();
$_SESSION['register']['config']=$configs;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

$request = FrontControllerModel::getRequest();
FrontControllerModel::dispatch($request);




