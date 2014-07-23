<?php




interface usersMysql
{		
	public function getUsers();
		
	public function getUser($id);
	
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
	
	public function updateUser($id, $data);
	
	public function deleteUser($id);	

}


interface dataMapper
{
	public function getAll();

	public function getOne($id);

	public function insert($data);

	public function update($id, $data);

	public function delete($id);

}



abstract class users extends MySQLAbstractModel implements usersMysql 
{
	public function getUsers()
	{
		
	}
}



abstract class users extends FileAbstractModel implements usersMysql
{
	public function getUsers()
	{

	}
}