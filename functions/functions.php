<?php

include ('tablaMultiplicar.php');
include ('fibonacci.php');
include ('mostrarMatriz.php');
include ('mostrarAssoc.php');

$matrix = tablaMultiplicar(5, 4);
echo "<pre>";
print_r($matrix);
echo "</pre>";


$valor = 33;
$array_fibo = fibonacci($valor);

echo "<pre>";
print_r($array_fibo);
echo "</pre>";



mostrarMatriz(array(array(1,9),array(8,9)));

mostrarMatriz($matrix);

$usuario = array (
		'Agustin',
		"Calderon",
		'agustincl@gmail.com',
		"direccion" => array("calle", "piso", "Habitacion"),
		"preferencias" => array(1,45,'ol',"yes",TRUE),
		3=>34,
		6=>"jajaja",
		'jojojo',
		1.2=>"y esta",
		2,56=>"y esta otra",
		TRUE=>"bueno bueno bueno"

);


mostrarAssoc($usuario);