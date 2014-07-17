<?php


if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action = '404';

switch ($action)
{
	case  '404':
		include('../views/error/404.php');		
	break;
	
	
			
}