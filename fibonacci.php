<?php
/*
 * Dado un valor, mostar la serie de Fibonacci 
 * hasta que el elemento actual sea 
 * menor o igual que el valor dado
 * Opcional: quitar la coma final.
 */

$valor = 3334;

echo "f= 0,1,1,2,3,5,8,13,21,";


echo "f=0,1,";
$f0=0;
$f1=1;
$f2=$f0+$f1;

while ($f2<=$valor)
{
	echo $f2.',';
	$f0=$f1;
	$f1=$f2;
	$f2=$f0+$f1;
}