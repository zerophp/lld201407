<?php
function getRequest()
{
	$url=explode("/",$_SERVER['REQUEST_URI']);
	
	if(isset($url[1]) && $url[1]=='')
	{
		$request['controller']='index';
		$request['action']='index';
		return $request;
	}
	else if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/../controllers/'.$url[1].'.php'))
	{
		$request['controller']='error';
		$request['action']='404';
		return $request;
	}
	else
	{
		$request['controller']=$url[1];
		if(!isset($url[2]))
		{
			$request['action']='index';
			return $request;
		}
		else
		{
			$request['action']=$url[2];
			$params=array();
			for($a=3;$a<sizeof($url);$a+=2)
			{
				if(isset($url[$a+1]))
					$params[$url[$a]]=$url[$a+1];
				else
					$params[$url[$a]]=null;
			}
			$request['params']=$params;			
		}
	}		
	return $request;
}