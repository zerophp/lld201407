<?php

class FrontControllerModel
{
	public static $defaultController = "index";
	public static $defaultAction = "index";
	public static $errorController = "error";
	public static $controller;
	public static $action;
	
	public static function getRequest()
	{
		$url=explode("/",$_SERVER['REQUEST_URI']);
		
		if(isset($url[1]) && $url[1]=='')
		{
			$request['controller']=self::$defaultController;
			$request['action']=self::$defaultAction;
			return $request;
		}
		else if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/../application/controllers/'.$url[1].'Controller.php'))
		{
			$request['controller']=self::$errorController;
			$request['action']='error404Action';
			return $request;
		}
		else
		{
			$request['controller']=$url[1];
			if(!isset($url[2]))
			{
				$request['action']=self::$defaultAction;
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
		self::$controller=$request['controller'];
		self::$action=$request['action'];
		
		return $request;
	}
	
	public static function dispatch($request)
	{
		$controller = $request['controller']."Controller";
		$action = $request['action']."Action";
		
		$controller = new $controller();
		$controller->$action(); 
		
		$layout  = $controller->layout;
		$content = $controller->content;
		
		include('../application/layouts/'.$layout.'.php');
		
		
	}
}





















