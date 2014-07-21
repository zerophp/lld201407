<?php
echo "Esto es sessions 2";


echo "<pre>Antes de start: ";
print_r($_SESSION);
echo "</pre>";

session_start();


echo "<pre>Despues de start: ";
print_r($_SESSION);
echo "</pre>";

echo "<pre>Despues de start: ";
print_r(session_id());
echo "</pre>";


