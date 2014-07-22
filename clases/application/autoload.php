<?php

function __autoload($name)
{
	$controller = substr($name,-10);
	$model = substr($name,-5);
	
	if($controller=='Controller')
		$var="Controller";
	elseif($model=="Model")
		$var="Model";
	
	switch($var)
	{
		case 'Controller':
			include_once ('../application/controllers/'.$name.'.php');
		break;
		case 'Model':
			include_once ('../application/models/'.$name.'.php');
		break;
	}
	
}