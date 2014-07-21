<?php
function getUserFromDB($iduser)
{
	$user=array();
	// Conectarse al Motor
	$link = mysqli_connect("localhost","root","");
	
	// Conectarse a la DB
	mysqli_select_db($link, 'lld201407');
	
	$data=array();
	// Query
	$query = "SELECT * FROM users WHERE iduser=".$iduser;

	if ($result = mysqli_query($link, $query))
	{
		$row = $result->fetch_assoc();
		
	}
	
	return $row;
}