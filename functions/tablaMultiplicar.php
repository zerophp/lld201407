<?php


function tablaMultiplicar($fila, $columna)
{

	// Definir variables e iniciarlas
	$matriz = array();
	
	
	for ($filas=0;$filas<=$fila;$filas++)
	{	
		for($columnas=0;$columnas<=$columna;$columnas++)
		{
		if($filas==0 && $columnas==0)
			
			$matriz[0][0]='*';
			else if($filas==0)
				{				
					$matriz[$filas][$columnas]=$columnas;
				}
			else if($columnas==0)
			{
				$matriz[$filas][$columnas]=$filas;
			}
			else
			{		
				$matriz[$filas][$columnas]=$filas*$columnas;
			}
		}
	}
	
	return $matriz; 
}


