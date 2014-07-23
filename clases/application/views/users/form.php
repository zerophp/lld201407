<?php 
// Includes
require_once('../models/getUserFromDB.php');



$user=getuserFromDB($request['params']['iduser']);
echo "<pre>";
print_r($user);
echo "</pre>";	
?>

<form method="POST" enctype="multipart/form-data">
<ul>
	<li>
		id: <input type="hidden" name="iduser" value="<?=(isset($request['params']['iduser']))?$request['params']['iduser']:'';?>"/>
	</li>
	<li>
		Nombre: <input type="text" name="name" value="<?=(isset($user['name']))?$user['name']:'';?>"/>
	</li>
	<li>
		Email: <input type="text" name="email" value="<?=(isset($user['email']))?$user['email']:'';?>"/>
	</li>
	<li>
		Password: <input type="password" name="password"/>
	</li>
	<li>
		Description: <textarea name="description"><?=(isset($user['description']))?$user['description']:'';?></textarea>		
	</li>
	<li>
		Photo: <input type="file" name="photo"/>
		<?php if(isset($user['photo'])&&$user['photo']!=''):?>
		<img src="uploads/<?=$user['photo'];?>" width="100px"/>
		<?php endif;?>
		
	</li>
	<li>
		City: 
		<select name="city">
			<option value="LLD" <?php if(isset($user['cities_idcity'])&&$user['cities_idcity']=="LLD") echo "selected";?>>Lleida</option>
			<option value="BCN" <?php if(isset($user['cities_idcity'])&&$user['cities_idcity']=="BCN") echo "selected";?>>Barcelona</option>
			<option value="GRN" <?=(isset($user['cities_idcity'])&&$user['cities_idcity']=="GRN")?"selected":'';?>>Girona</option>
		</select>
	</li>
	<li>
		Gender: 
		Otros <input type="radio" name="gender" value="1" <?=(isset($user['genders_idgender'])&&$user['genders_idgender']=="o")?"checked":'';?>/>
		Mujer <input type="radio" name="gender" value="2" <?=(isset($user['genders_idgender'])&&$user['genders_idgender']=="m")?"checked":'';?>/>
		Hombre <input type="radio" name="gender" value="3" <?=(isset($user['genders_idgender'])&&$user['genders_idgender']=="h")?"checked":'';?>/>
	</li>
	<li>
		Pets: 
		<select multiple name="pets[]">
			<option value="Dog" <?=(isset($user['name'])&&in_array('Dog',$user['name']))?"selected":'';?>>Perro</option>
			<option value="Tiger" <?=(isset($user['name'])&&in_array('Tiger',$user['name']))?"selected":'';?>>Tigre</option>
			<option value="Cat" <?=(isset($user['name'])&&in_array('Cat',$user['name']))?"selected":'';?>>Gato</option>
		</select>
	</li>
	<li>
		Languages: 
		English <input type="checkbox" name="languages[]" value="en" <?=(isset($user['name'])&&in_array('en',$user['name']))?"checked":'';?>/>
		Catal� <input type="checkbox" name="languages[]" value="ca" <?=(isset($user['name'])&&in_array('ca',$user['name']))?"checked":'';?>/>
		Castellano <input type="checkbox" name="languages[]" value="es" <?=(isset($user['name'])&&in_array('es',$user['name']))?"checked":'';?>/>		
	</li>	
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
		Boton: <input type="button" name="button" value="Boton"/>
	</li>
</ul>
</form>