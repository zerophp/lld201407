<?php


// Hoy es la semana 31 del año 2014. Es martes son las 11:13 y estamos a dia 15, o dia 205 del año.


$dias = array ('Sunday' => 'Domingo',
			   'Monday' => 'Lunes',
			   'Tuesday' => 'Martes');

echo date("\H\o\y \e\s \l\a \s\e\m\a\\n\a W \d\e\l \a\ñ\o Y. \E\s ");
echo $dias[date("l")];
echo date(" \s\o\\n \l\a\s H:i \y \e\s\\t\a\m\o\s \a \d\i\a d \o \d\i\a z");