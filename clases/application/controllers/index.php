<?php

switch ($request['action'])
{
	case  'index':
		ob_start();
			include('../application/views/index/index.php');	
		$content=ob_get_contents();
		ob_end_clean();
	break;
	
	
			
}

include('../application/layouts/jumbotron-narrow.php');