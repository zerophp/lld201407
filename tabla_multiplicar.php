
<table border=1>

	<tr> 
		<td>1</td>
		<td>2</td>
		<td>3</td>
	</tr>
	
	<tr> 
		<td>2</td>
		<td>4</td>
		<td>6</td>
	</tr>
	
	<tr> 
		<td>3</td>
		<td>6</td>
		<td>9</td>
	</tr>
	
</table>

<?php

/*
 * Dados dos valores, columnas y filas, dibujar una 
 * tabla en html(con bordes) que contenga los indices
 * y sus operaciones.
 */
$a=4;
$b=5;


echo "<table border=1>";
	for ($filas=0;$filas<=$a;$filas++)
	{
		
		echo "<tr>";
			for($columnas=0;$columnas<=$b;$columnas++)
			{
				if($filas==0 && $columnas==0)
					echo "<td>*</td>";
				else if($filas==0)
				{
					echo "<td>".$columnas."</td>";
				}
				else if($columnas==0)
				{
					echo "<td>".$filas."</td>";
				}
				else
				{
					echo "<td>";
						echo $filas*$columnas;
					echo "</td>";
				}
			}
		echo "</tr>";
	}

echo "</table>";













