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
		$link = null;
		try 
		{
			$link = mysqli_connect($host,$user,$password);
			
// 			echo "<pre>";
// 			print_r($link);
// 			echo "</pre>";
// 			die;
			if (!is_object($link))
				throw new Exception("Error de cnx");
			return $link;
		}
		catch (Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
		
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


