<?php
class errorController
{
	
	public $content;
	public $layout = 'error';
	
	public function indexAction()
	{
		$this->content = viewsModel::renderView();
	}
	
	public function error404Action()
	{
		$this->content = viewsModel::renderView();
	}
}