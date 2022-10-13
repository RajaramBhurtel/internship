<?php 
	$request =  $_SERVER['REQUEST_URI'];
	 
	
		switch ( $request ) {
			case '/office/':
				require __DIR__ . '/view/login.php';

				break;

			case '/office/login':
				require __DIR__. '/view/login.php';
				break;

			case '/office/home':
				require __DIR__.'/view/home.php';
				break;

			default:
				require __DIR__. '/view/error.php';
				break;
		}
?>