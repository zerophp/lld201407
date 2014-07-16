<?php 
// Debugs
echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

echo "<pre>File: ";
print_r($_FILES);
echo "</pre>";


// Includes
require_once('getUserFromFile.php');

$user = getuserFromFile($_GET['pos']);

echo "<pre>User: ";
print_r($user);
echo "</pre>";

?>

<form action="action-update.php" method="POST" enctype="multipart/form-data">
<ul>
	<li>
		id: <input type="hidden" name="id" value="<?=$_GET['pos'];?>"/>
	</li>
	<li>
		Nombre: <input type="text" name="name" value="<?php echo $user[1];?>"/>
	</li>
	<li>
		Email: <input type="text" name="email" value="<?=$user[2];?>"/>
	</li>
	<li>
		Password: <input type="password" name="password"/>
	</li>
	<li>
		Description: <textarea name="description"><?=$user[4];?></textarea>
	</li>
	<li>
		Photo: <input type="file" name="photo"/>
		<img src="uploads/<?=$user[10];?>" width="100px"/>
		
	</li>
	<li>
		City: 
		<select name="city">
			<option value="LLD" <?php if($user[5]=="LLD") echo "selected";?>>Lleida</option>
			<option value="BCN" <?php if($user[5]=="BCN") echo "selected";?>>Barcelona</option>
			<option value="GRN" <?=($user[5]=="GRN")?"selected":'';?>>Girona</option>
		</select>
	</li>
	<li>
		Gender: 
		Otros <input type="radio" name="gender" value="o" <?=($user[6]=="o")?"checked":'';?>/>
		Mujer <input type="radio" name="gender" value="m" <?=($user[6]=="m")?"checked":'';?>/>
		Hombre <input type="radio" name="gender" value="h" <?=($user[6]=="h")?"checked":'';?>/>
	</li>
	<li>
		Pets: 
		<select multiple name="pets[]">
			<option value="Dog" <?=(isset($user[7])&&in_array('Dog',$user[7]))?"selected":'';?>>Perro</option>
			<option value="Tiger" <?=(isset($user[7])&&in_array('Tiger',$user[7]))?"selected":'';?>>Tigre</option>
			<option value="Cat" <?=(isset($user[7])&&in_array('Cat',$user[7]))?"selected":'';?>>Gato</option>
		</select>
	</li>
	<li>
		Languages: 
		English <input type="checkbox" name="languages[]" value="en" <?=(isset($user[8])&&in_array('en',$user[8]))?"checked":'';?>/>
		Catal� <input type="checkbox" name="languages[]" value="ca" <?=(isset($user[8])&&in_array('ca',$user[8]))?"checked":'';?>/>
		Castellano <input type="checkbox" name="languages[]" value="es" <?=(isset($user[8])&&in_array('es',$user[8]))?"checked":'';?>/>		
	</li>	
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
		Boton: <input type="button" name="button" value="Boton"/>
	</li>
</ul>
</form>