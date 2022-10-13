<?php 
	$request =  $_SERVER['REQUEST_URI'];
	echo $request;
	
		switch ( $request ) {
			case 'office':
			case '/office/':
				require __DIR__ . '/index.php';
				break;

			case 'office/login':
				require __DIR__. '/view/login.php';
				break;

			case 'office/home':
				require __DIR__.'/view/home.php';
				break;

			default:
				require __DIR__. '/view/default.php';
				break;
		}
?>