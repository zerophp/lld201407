<?php

$data = file_get_contents('usuarios.txt');

$data = explode("\n", $data);

echo "<table border=1>";

echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>email</th>";
echo "<th>password</th>";
echo "<th>description</th>";
echo "<th>city</th>";
echo "<th>gender</th>";
echo "<th>pets</th>";
echo "<th>languages</th>";
echo "<th>submit</th>";
echo "<th>photo</th>";
echo "<th>Options</th>";
echo "</tr>";

foreach ($data as $rows)
{
	echo "<tr>";
		$row=explode('|',$rows);
			foreach($row as $value)
			{
				echo "<td>";
				echo $value;
				echo "</td>";
			}
		echo "<td>";
			echo "<a href=\"#\">Update</a>";
			echo " | ";
			echo "<a href=\"#\">Delete</a>";	
		echo "</td>";
	echo "</tr>";
}

echo "</table>";