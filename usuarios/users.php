<?php

require_once ('models/insertUserIntoFile.php');
require_once ('models/updateUserIntoFile.php');
require_once ('models/deleteUserIntoFile.php');

if(isset($_GET['action']))
	$action=$_GET['action'];
else
	$action = 'select';

switch ($action)
{
	case  'select':
		$data = file_get_contents('usuarios.txt');
		$data = explode("\n", $data);
		include('views/select.php');		
	break;
	
	case  'insert':
		if($_POST)
		{
			insertUserIntoFile($_POST,$_FILES);
			header('Location: /users.php');
		}
		else 
			include ('views/form.php');
	break;
	
	case  'update':
		if($_POST)
		{
			updateUserIntoFile($_POST, $_FILES);
			header('Location: /users.php');
		}
		else
			include ('views/form.php');
	break;
		
	case  'delete':
		if($_POST)
		{
			if($_POST['delete']=='no')
			{
				header('Location: /users.php');
				exit;
			}
			deleteUserIntoFile($_POST);
			header('Location: /users.php');
		}
		else
			include ('views/form-delete.php');
	break;
			
}