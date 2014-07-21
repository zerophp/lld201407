<?php
echo "Esto es sessions";


echo "<pre>Antes de start: ";
print_r($_SESSION);
echo "</pre>";

session_start();


echo "<pre>Despues de start: ";
print_r($_SESSION);
echo "</pre>";

$_SESSION['name']='value';
$_SESSION['name2']='value2';

echo "<pre>Con valores:";
print_r($_SESSION);
echo "</pre>";

unset ($_SESSION['name']);

echo "<pre>Quitando un valor:";
print_r($_SESSION);
echo "</pre>";

session_destroy();
session_start();

echo "<pre>Despues de Destroy:";
print_r($_SESSION);
echo "</pre>";

$_SESSION['name3']='value3';