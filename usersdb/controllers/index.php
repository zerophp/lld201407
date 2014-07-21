<?php

switch ($request['action'])
{
	case  'index':
		ob_start();
			include('../views/index/index.php');	
		$content=ob_get_contents();
		ob_end_clean();
	break;
	
	
			
}

include('../layouts/jumbotron-narrow.php');