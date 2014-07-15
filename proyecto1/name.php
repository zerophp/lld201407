<?php

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

var_dump($usuario);

echo "<pre>";
print_r($usuario);
echo "</pre>";


echo gettype($usuario);

echo "<hr/>";

$otravariable = "Agustin Calderon";

echo $otravariable[0];
echo "<br/>";
echo $otravariable[8];

echo "<hr/>";

echo $_SERVER['DOCUMENT_ROOT'];


echo "<pre>Server: ";
print_r($_SERVER);
echo "</pre>";

echo "<hr/>";

$agua = "fria";
define("AGUA", "caliente");


echo @agua;



echo "<hr/>";


echo 4<<2;
echo "<hr/>";

echo 5*2/2*6*3-4-2;
echo "<hr/>";
echo 5*(2/2)*6*(3-4)-2;




















