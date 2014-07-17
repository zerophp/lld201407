<?php

/**
 * Get user from file
 * @param int $pos
 * @return array
 */
function getuserFromFile($pos,$filename)
{
	$out = array();
	
	$users = file_get_contents($filename);
	$users = explode("\n", $users);
	$user=explode("|",$users[$pos]);
	
	foreach($user as $key => $value)
	{
		if($key == 7 || $key ==8)
			$out[]=explode(",",$value);
		else
			$out[]=$value;
	}	
	return $out;
}