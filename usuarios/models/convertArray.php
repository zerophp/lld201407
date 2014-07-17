<?php
function convertArray($array)
{
	$out=array();
	foreach($array as $key => $value)
	{
		if (is_array($value))
		{
			$out[]=implode(',',$value);
		}
		else
		{
			$out[]=$value;
		}	
	}
	return implode('|',$out);
}