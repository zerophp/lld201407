<form action="action.php" method="POST" enctype="multipart/form-data">
<ul>
	<li>
		id: <input type="hidden" name="id" value="1"/>
	</li>
	<li>
		Nombre: <input type="text" name="name"/>
	</li>
	<li>
		Email: <input type="text" name="email"/>
	</li>
	<li>
		Password: <input type="password" name="password"/>
	</li>
	<li>
		Description: <textarea name="description"></textarea>
	</li>
	<li>
		Photo: <input type="file" name="photo"/>
	</li>
	<li>
		City: 
		<select name="city">
			<option value="LLD">Lleida</option>
			<option value="BCN">Barcelona</option>
			<option value="GRN">Girona</option>
		</select>
	</li>
	<li>
		Gender: 
		Otros <input type="radio" name="gender" value="o"/>
		Mujer <input type="radio" name="gender" value="m"/>
		Hombre <input type="radio" name="gender" value="h"/>
	</li>
	<li>
		Pets: 
		<select multiple name="pets[]">
			<option value="Dog">Perro</option>
			<option value="Tiger">Tigre</option>
			<option value="Cat">Gato</option>
		</select>
	</li>
	<li>
		Languages: 
		English <input type="checkbox" name="languages[]" value="en"/>
		Catal� <input type="checkbox" name="languages[]" value="ca"/>
		Castellano <input type="checkbox" name="languages[]" value="es"/>		
	</li>	
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
		Boton: <input type="button" name="button" value="Boton"/>
	</li>
</ul>
</form>