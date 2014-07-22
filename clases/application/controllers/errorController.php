<?php
class errorController
{
	public function indexAction()
	{
		include('../application/views/error/index.php');
	}
	
	public function error404Action()
	{
		include('../application/views/error/404.php');
	}
}