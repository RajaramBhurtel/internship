<?php 
	 // var_dump( $_GET ); 

	if ( isset( $_GET [ 'action' ] )) {
		$action = $_GET[ 'action' ];
		switch ( $action ){
			case '' 	 :
			case 'index' :
				include 'view/index.php';
				break;

			case $action :
				if( file_exists( 'view/'.$action.'.php')){
					include 'view/'.$action.'.php';
					break;
				}
				else{
					goto error;
					break;
				}
				
			default:
				error:
					include 'view/error.php';
					break;
		}
	}else{
	 	include 'view/index.php';
	 }


?>