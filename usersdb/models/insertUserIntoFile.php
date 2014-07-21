<?php


function insertUserIntoFile($data, $datafiles)
{
	include ('convertArray.php');
	file_put_contents('usuarios.txt', convertArray($data).'|'.$datafiles['photo']['name']."\n", FILE_APPEND);
	move_uploaded_file($datafiles['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$datafiles['photo']['name']);
}