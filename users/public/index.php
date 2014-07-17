<?php
require_once '../models/getRequest.php';
$request=getRequest();



// Lectura de configs
$configs=parse_ini_file('../configs/config.ini');

switch ($request['controller'])
{
	case 'users':
		echo "esto users";
		include('../controllers/users.php');
	break;
	case 'index':
		include('../controllers/index.php');
	break;
	case 'error':
		include('../controllers/error.php');
	break;
}

