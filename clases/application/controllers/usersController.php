<?php

class usersController
{
	public $content;
	public $layout = 'dashboard';
	
	public function __construct()
	{			
		// Control de autenticacion		
		if(!isset($_SESSION['user']['iduser']) or $_SESSION['user']['iduser']="")
			header('Location: /author/login');
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
			
			try {
				$userid = $model->deleteUser(FrontControllerModel::$params['iduser']);
				if ($userid == FALSE)
					throw new Exception("Query not executed");
			
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
			
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




