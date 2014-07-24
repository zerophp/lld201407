<?php

class usersTableModel extends MySQLAbstractModel implements tableUsersInterfaceModel
{
	public $link;
	
	public function __construct()
	{
		$this->link = $this->connectEngine("localhost","root","1234");
		$this->connectDB($this->link, 'lld201407');
	}
	
	public function getUsers()
	{			
		$users=array();
		// Query
		$query = "SELECT * FROM users";
		if ($result = $this->query($this->link, $query))		
			while($row = $this->getAssoc($result))
				$users[]=$row;
		
		return $users;	
	}

	public function getUser($id)
	{
		$user=array();
		// Query
		$query = "SELECT * FROM users WHERE iduser=".$id;
		if ($result = $this->query($this->link, $query))
			while($row = $this->getAssoc($result))
				$user[]=$row;
		
		return $user[0];
	}

	public function insertUser($data)
	{			
		$city=array('LLD'=>1, 'BCN'=>2, 'GRN'=>3);
		$query="INSERT INTO users SET
					name='".$data['name']."',
					email='".$data['email']."',
					password='".$data['password']."',
					description='".$data['description']."',
					photo='".$data['filename']."',
					cities_idcity=".$city[$data['city']].",
					genders_idgender=".$data['gender']."";

		$this->query($this->link, $query);
		
		return mysqli_insert_id($this->link);
	}

	public function updateUser($id, $data)
	{
		$city=array('LLD'=>1, 'BCN'=>2, 'GRN'=>3);
		$query="UPDATE users SET
					name='".$data['name']."',
					email='".$data['email']."',
					password='".$data['password']."',
					description='".$data['description']."',
					photo='".$data['filename']."',
					cities_idcity=".$city[$data['city']].",
					genders_idgender=".$data['gender']." 
					WHERE iduser=".$id;		
		$this->query($this->link, $query);
		
		return $data['iduser'];
	}

	public function deleteUser($id)
	{	  
		 
		$query="DELETE FROM users
				WHERE iduser=".$id; 
		$this->query($this->link, $query);
		
		return true;
	}
	
	public function getUserLogin($email, $password)
	{
		$user=array();
		// Query
		$password=hash("sha256", $password);
		$query = "SELECT iduser, name, email FROM users WHERE email='".$email."' AND password='".$password."'";
		if ($result = $this->query($this->link, $query))
			while($row = $this->getAssoc($result))
				$user[]=$row;
		
			return $user[0];
	}

	
}