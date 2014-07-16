<?php
echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";

echo "<pre>File: ";
print_r($_FILES);
echo "</pre>";


include ('convertArray.php');


file_put_contents('usuarios.txt', convertArray($_POST).'|'.$_FILES['photo']['name']."\n", FILE_APPEND);


move_uploaded_file($_FILES['photo']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$_FILES['photo']['name']);

header('Location: /users.php');