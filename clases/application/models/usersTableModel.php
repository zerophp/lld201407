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
		
	}

	public function insertUser($data)
	{
		$city=array('BCN'=>1);
		$gender=array('m'=>1,'h'=>2,'o'=>3);
		$query="INSERT INTO users SET
					name='".$_POST['name']."',
					email='".$_POST['email']."',
					password='".$_POST['password']."',
					description='".$_POST['description']."',
					photo='".$_FILES['photo']['name']."',
					cities_idcity=".$city[$_POST['city']].",
					gender=".$gender[$_POST['gender']].",
					genders_idgender=".$gender[$_POST['gender']]."";
	}

	public function updateUser($id, $data)
	{
		
	}

	public function deleteUser($id)
	{
		
	}

	
}