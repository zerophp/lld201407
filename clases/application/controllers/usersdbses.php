<?php


// Include de librerias
require_once ('../models/insertUserIntoFile.php');
require_once ('../models/updateUserIntoFile.php');
require_once ('../models/deleteUserIntoFile.php');


// Control de autenticacion


if(isset($_SESSION['user']['iduser'])&&$_SESSION['user']['iduser']="")
{
	
}
else
	header('Location: /author/login');


switch ($request['action'])
{
	case 'index':
	case 'select':
		$data = file_get_contents($configs['usersfile']);
		
		// Conectarse al Motor
		$link = mysqli_connect("localhost","root","");
		
		// Conectarse a la DB
		mysqli_select_db($link, 'lld201407');	
		
		$data=array();
		// Query
		$query = "SELECT * FROM users";
		if ($result = mysqli_query($link, $query)) 
		{
			while($row = $result->fetch_assoc())
			{
				//echo $row['name'].": ".$row['email']."<br/>";
				$data[]=$row;
			}
		}
		
		
		
		ob_start();
			include('../views/usersdb/select.php');	
			$content=ob_get_contents();
		ob_end_clean();	
	break;
	
	case  'insert':
		if($_POST)
		{
			insertUserIntoFile($_POST,$_FILES);
			
			
			// Conectarse al Motor
			$link = mysqli_connect("localhost","root","");
			
			// Conectarse a la DB
			mysqli_select_db($link, 'lld201407');
			
			// Cojer los datos del post 3 
			
			// Escribir un Insert con los datos del post 10
			
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			$city=array('BCN'=>1);	
			$gender=array('m'=>1,'h'=>2,'o'=>3);
			$query="INSERT INTO users SET 
						name='".$_POST['name']."',
						email='".$_POST['email']."',
						password='".$_POST['password']."',
						description='".$_POST['description']."',
						photo='".$_FILES['photo']['name']."',
						cities_idcity=".$city[$_POST['city']].",
						gender=".$gender[$_POST['gender']].",
						genders_idgender=".$gender[$_POST['gender']]."";			
			// Probar el Insert 
			echo $query;
			// Enviar el INSERT a la DB 3 
			mysqli_query($link, $query);
			// Saltar a users 1
			
			header('Location: /usersdb');
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
			
			// Conectarse al Motor
			$link = mysqli_connect("localhost","root","");
				
			// Conectarse a la DB
			mysqli_select_db($link, 'lld201407');
				
			// Cojer los datos del post 3
				
			// Escribir un Insert con los datos del post 10
				
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			$city=array('BCN'=>1,'LLD'=>2);
			$gender=array('m'=>1,'h'=>2,'o'=>3);
			$query="UPDATE users SET
						name='".$_POST['name']."',
						email='".$_POST['email']."',
						password='".$_POST['password']."',
						description='".$_POST['description']."',
						photo='".$_FILES['photo']['name']."',
						cities_idcity=".$city[$_POST['city']].",
						gender=".$_POST['gender'].",
						genders_idgender=".$_POST['gender']."
					WHERE iduser=".$_POST['iduser'];
			// Probar el Insert 
// 			echo $query;
// 			die;
			// Enviar el INSERT a la DB 3
			mysqli_query($link, $query);
			// Saltar a users 1
			
			header('Location: /usersdb');
		}
		else
		{
			ob_start();
			include ('../views/usersdb/form.php');
			$content=ob_get_contents();
			ob_end_clean();
		}
	break;
		
	case  'delete':
		if($_POST)
		{
			if($_POST['delete']=='no')
			{
				header('Location: /usersdb');
				exit;
			}
			//deleteUserIntoFile($_POST, $configs['usersfile']);
			
			updateUserIntoFile($_POST, $_FILES);
				
			// Conectarse al Motor
			$link = mysqli_connect("localhost","root","");
			
			// Conectarse a la DB
			mysqli_select_db($link, 'lld201407');
			
			// Cojer los datos del post 3
			
			// Escribir un Insert con los datos del post 10
			
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			$city=array('BCN'=>1,'LLD'=>2);
			$gender=array('m'=>1,'h'=>2,'o'=>3);
			$query="DELETE FROM users 
					WHERE iduser=".$_POST['iduser'];
			// Probar el Insert 
// 						echo $query;
// 						die;
			// Enviar el INSERT a la DB 3
			mysqli_query($link, $query);
			// Saltar a users 1
			
			
			header('Location: /usersdb');
		}
		else
		{
			ob_start();
			include ('../views/usersdb/form-delete.php');
			$content=ob_get_contents();
			ob_end_clean();
		}
	break;
			
}

include('../layouts/dashboard.php');