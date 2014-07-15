<?php




function mostrarMatriz($matrix)
{
	//foreach($matrix as $key => $value)
	echo "<table border=1>";
	for($a=0;$a<sizeof($matrix[0]);$a++)
	{
		echo "<tr>";
		for ($b=0;$b<count($matrix);$b++)
		{
			echo "<td>".$matrix[$a][$b]."</td>";	
		}
		echo "</tr>";		
	}
	echo "</table>";
	
}


