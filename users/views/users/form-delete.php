<form method="POST">
<ul>
	<li>
		id: <input type="hidden" name="id" value="<?=$request['params']['pos'];?>"/>
	</li>	
	<li>
		Seguro que deseas borra el usuario <?=$request['params']['pos'];?>: 
		Si <input type="radio" name="delete" value="yes"/>
		No <input type="radio" name="delete" value="no"/>
	</li>
	<li>
		Enviar: <input type="submit" name="enviar" value="Enviar"/>
	</li>
</ul>
</form>