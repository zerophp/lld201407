<?php
echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

echo "<pre>File: ";
print_r($_FILES);
echo "</pre>";

$file = 'usuarios.txt';

if($_POST['delete']=='no')
	{
		header('Location: /users.php');
		exit;
	}	
// Recibir la posicion POS 1
$user_pos = $_POST['id'];
// Leer usuarios en un array 1
$users = file_get_contents($file);
	// 	Separar por saltos de linea los usuarios 1
$users = explode("\n",$users);
// Borrra la fila correspondinte al usuario 5
unset($users[$user_pos]);
// Convertir el array en string separado por slatos de linea 1
$users = implode("\n",$users);
// Escribir en el archivo 1
file_put_contents($file, $users);
header('Location: /users.php');