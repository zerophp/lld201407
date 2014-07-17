<?php

function updateUserIntoFile ($data, $datafiles)
{
	// Includes
	require_once 'convertArray.php';
	
	// Tomar el usuario enviado
	//$_POST
	
	// Leer el archivo de texto 1
	$file = "usuarios.txt";
	$users = file_get_contents($file);
	
	// Separarlo por saltos de linea 1
	$users=explode("\n",$users);
	
	// Tomar el usuario correspondiente a POS 1
	$users_pos=$data['id'];
	
	// Modificar el usuario en POS 5
	//$user = $users[$users_pos];
	$user=convertArray($data).'|'.$datafiles['photo']['name'];
	$users[$users_pos]=$user;
	
	// Reeescribir el array de usuarios 3
	$users=implode("\n",$users);
	
	// Escricir el array en el archivos de texto 3
	file_put_contents($file, $users);
	
	return;
}
