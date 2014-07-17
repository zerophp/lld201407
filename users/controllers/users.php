<?php


// Include de librerias
require_once ('../models/insertUserIntoFile.php');
require_once ('../models/updateUserIntoFile.php');
require_once ('../models/deleteUserIntoFile.php');



switch ($request['action'])
{
	case 'index':
	case 'select':
		$data = file_get_contents($configs['usersfile']);
		$data = explode("\n", $data);
		ob_start();
			include('../views/users/select.php');	
			$content=ob_get_contents();
		ob_end_clean();	
	break;
	
	case  'insert':
		if($_POST)
		{
			insertUserIntoFile($_POST,$_FILES);
			header('Location: /users');
		}
		else {
			ob_start();
			include ('../views/users/form.php');
			$content=ob_get_contents();
			ob_end_clean();}
	break;
	
	case  'update':
		if($_POST)
		{
			updateUserIntoFile($_POST, $_FILES);
			header('Location: /users');
		}
		else
		{
			ob_start();
			include ('../views/users/form.php');
			$content=ob_get_contents();
			ob_end_clean();
		}
	break;
		
	case  'delete':
		if($_POST)
		{
			if($_POST['delete']=='no')
			{
				header('Location: /users');
				exit;
			}
			deleteUserIntoFile($_POST, $configs['usersfile']);
			header('Location: /users');
		}
		else
		{
			ob_start();
			include ('../views/users/form-delete.php');
			$content=ob_get_contents();
			ob_end_clean();
		}
	break;
			
}

include('../layouts/dashboard.php');