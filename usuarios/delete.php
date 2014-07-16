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




?>

<form action="action-delete.php" method="POST">
<ul>
	<li>
		id: <input type="hidden" name="id" value="<?=$_GET['pos'];?>"/>
	</li>	
	<li>
		Seguro que deseas borra el usuario: 
		Si <input type="radio" name="delete" value="yes"/>
		No <input type="radio" name="delete" value="no"/>
	</li>
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
	</li>
</ul>
</form>