<?php 
$user=$data;	
?>
<form method="POST">
<ul>
	<li>
		id: <input type="hidden" name="iduser" value="<?=$user['iduser'];?>"/>
	</li>	
	<li>
		Seguro que deseas borra el usuario <?=$user['name'];?>: 
		Si <input type="radio" name="delete" value="yes"/>
		No <input type="radio" name="delete" value="no"/>
	</li>
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
	</li>
</ul>
</form>