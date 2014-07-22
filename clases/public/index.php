<?php

require_once '../application/models/FrontController/getRequest.php';
$request=getRequest();



// Lectura de configs
$configs=parse_ini_file('../application/configs/config.ini');

session_start();

switch ($request['controller'])
{
	case 'users':
		echo "esto users";
		include('../application/controllers/users.php');
	break;
	
	case 'usersdb':
		echo "esto users";
		include('../application/controllers/usersdb.php');
	break;
	
	case 'usersdbses':
		echo "esto users";
		include('../application/controllers/usersdbses.php');
		break;
		
	case 'index':
		include('../application/controllers/index.php');
	break;
	case 'error':
		include('../application/controllers/error.php');
	break;
}

