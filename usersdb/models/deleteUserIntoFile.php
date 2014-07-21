<?php


function deleteUserIntoFile($data, $filename)
{	
	// Recibir la posicion POS 1
	$user_pos = $data['id'];
	// Leer usuarios en un array 1
	$users = file_get_contents($filename);
	// 	Separar por saltos de linea los usuarios 1
	$users = explode("\n",$users);
	// Borrra la fila correspondinte al usuario 5
	unset($users[$user_pos]);
	// Convertir el array en string separado por slatos de linea 1
	$users = implode("\n",$users);
	// Escribir en el archivo 1
	file_put_contents($filename, $users);
	header('Location: /users.php');
}