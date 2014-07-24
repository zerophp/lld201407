<?php 

class authorController
{
	public $content;
	public $layout = 'login';
	
	public function indexAction()
	{
		header('Location: /author/login');
	}

	public function loginAction()
	{		
		if($_POST)
		{
			if($_SESSION['token']!=$_POST['csrf'])
				header('Location: http://clases.local/author/login');
			
			$model= new usersTableModel();
			$user=$model->getUserLogin($_POST['email'], $_POST['password']);
			
			if(isset($user['iduser']))
			{
				session_regenerate_id();
				$_SESSION['user']=$user;
				header('Location: /users');				
			}
			else 
			{
				$_SESSION['user']=null;
				$data['csrf']=hash("sha256",session_id().$_SESSION['register']['config']['digital_signature']);
				$_SESSION['token']=$data['csrf'];
				header('Location: /author/login');
			}			
		}
		else
		{ 
			$data['csrf']=hash("sha256",session_id().$_SESSION['register']['config']['digital_signature']);
			$_SESSION['token']=$data['csrf'];
			$this->content = viewsModel::renderView($data);
		}
	}
	
	public function logoutAction()
	{
		$_SESSION['user']=null;
		$_SESSION['token']=null;
		session_regenerate_id();
		header('Location: /');
	}
	
}