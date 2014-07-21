<?php
require_once '../models/getRequest.php';
$request=getRequest();



// Lectura de configs
$configs=parse_ini_file('../configs/config.ini');

session_start();

switch ($request['controller'])
{
	case 'users':
		echo "esto users";
		include('../controllers/users.php');
	break;
	
	case 'usersdb':
		echo "esto users";
		include('../controllers/usersdb.php');
	break;
	
	case 'usersdbses':
		echo "esto users";
		include('../controllers/usersdbses.php');
		break;
		
	case 'index':
		include('../controllers/index.php');
	break;
	case 'error':
		include('../controllers/error.php');
	break;
}

