<?php

class usersController
{
	public $content;
	public $layout = 'dashboard';
	
	public function __construct()
	{
		// Include de librerias
		require_once ('../application/models/insertUserIntoFile.php');
		require_once ('../application/models/updateUserIntoFile.php');
		require_once ('../application/models/deleteUserIntoFile.php');
		
		
		// Control de autenticacion
		
// 		if(isset($_SESSION['user']['iduser'])&&$_SESSION['user']['iduser']="")
// 		{
		
// 		}
// 		else
// 			header('Location: /author/login');
		

	}

	
	public function indexAction()
	{
		header('Location: /users/select');
	}
	
	public function selectAction()
	{
		$model = new usersTableModel();
		$data = $model->getUsers();
		$this->content = viewsModel::renderView($data);	
	}
	
	public function insertAction()
	{
		if($_POST)
		{
			$model = new usersTableModel();
			$_POST['filename']=$_FILES['photo']['name'];
			$userid = $model->insertUser($_POST);
			header('Location: /users');
		}
		else 
			$this->content = viewsModel::renderView();	
	}
	
	public function updateAction()
	{
		if($_POST)
		{
			$model = new usersTableModel();
			$_POST['filename']=$_FILES['photo']['name'];
			$userid = $model->updateUser(FrontControllerModel::$params['iduser'],$_POST);
			header('Location: /users');
		}
		else
		{
			$model = new usersTableModel();
			$data = $model->getUser(FrontControllerModel::$params['iduser']);
			$this->content = viewsModel::renderView($data);		
		}		
	}
	
	public function deleteAction()
	{
		if($_POST)
		{
			if($_POST['delete']=='no')
			{
				header('Location: /users');
				exit;
			}
			$model = new usersTableModel();
			$userid = $model->deleteUser(FrontControllerModel::$params['iduser']);
			header('Location: /users');
		}
		else
		{
			$model = new usersTableModel();
			$data = $model->getUser(FrontControllerModel::$params['iduser']);
			$this->content = viewsModel::renderView($data);		
		}
	}
}




