<?php




function mostrarAssoc($matrix)
{
	foreach($matrix as $key => $value)
	{
		echo $key.': '.$value;
		echo "<br/>";
	}
	
}

