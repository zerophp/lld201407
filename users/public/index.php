<?php


$url=explode("/",$_SERVER['REQUEST_URI']);

echo "<pre>";
print_r($url);
echo "</pre>";



die;

if(isset($_GET['controller']))
	$controller=$_GET['controller'];
else
	$controller='home';

// Control de error de controller

if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/../controler/'.$controller.'.php'))
	$controller='error';	


switch ($controller)
{
	case 'users':
		echo "esto users";
		include('../controllers/users.php');
	break;
	case 'home':
		echo "esto es el homepage";
	break;
	case 'error':
		include('../controllers/error.php');
	break;
}