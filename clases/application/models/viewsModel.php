<?php


class viewsModel
{
	static public function renderView($data=null)
	{
		ob_start();
		include('../application/views/'.FrontControllerModel::$controller.'/'.FrontControllerModel::$action.'.php');
		$content=ob_get_contents();
		ob_end_clean();

		return $content;
	} 
}