<?php


abstract class MySQLClass
{
	/**
	 * Conecta al motor de MySQL
	 * 
	 * @param string $host
	 * @param string $user
	 * @param string $password
	 * @return resource database link
	 */
	public function connectMySQL($host,$user,$password)
	{
		$link = mysqli_connect($host,$user,$password);
		return $link;
	}
	
	
	
	
}

interface usersMysql
{		
	public function getUsers();
		
	public function getUser($id);
	
	public function insertUser($data);
	
	public function updateUser($id, $data);
	
	public function deleteUser($id);	

}


abstract class users extends MySQLClass implements usersMysql 
{
	public function getUsers()
	{
		
	}
}


