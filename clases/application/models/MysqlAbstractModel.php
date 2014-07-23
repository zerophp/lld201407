<?php
abstract class MySQLAbstractModel
{
	/**
	 * Conecta al motor de MySQL
	 *
	 * @param string $host
	 * @param string $user
	 * @param string $password
	 * @return resource database link
	 */
	public function connectEngine($host,$user,$password)
	{
		$link = mysqli_connect($host,$user,$password);
		return $link;
	}
	
	public function connectDB($link, $db)
	{
		mysqli_select_db($link, 'lld201407');
	}
	
	public function query($link, $query)
	{
		return mysqli_query($link, $query);
	}
	
	public function getAssoc($result)
	{
		return $result->fetch_assoc();		
	}
	
	public function getLastId($link)
	{
		return mysql_query($link, 'get_last_id()');
	}
}


