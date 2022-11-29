<?php
	$url = (isset($_GET['url'])) ? $_GET['url']:'';
	$url = array_filter(explode('/',$url));

	if(isset($url[0]) && $url[0] == 'api') {
		$route = '';
		if(isset($url[1])) {
			$route = $url[1];
		}
		include 'api/index.php';
	} else {
		$file = '';
		if(isset($url[1])) {
			if(file_exists('web/include/'.$url[1].'.php')){
				$file = 'web/include/'.$url[1].'.php';
			} else {
				$file = 'web/include/404.php';
			}
		}
		include 'web/home.php';
	}
	
?>