<style type="text/css">
	.alert1 {
		padding: 10px;
		background-color: #dc1403;
		color: white;
	}
	.alert2 {
		padding: 10px;
		background-color: green;
		color: white;
	}

	#hideMeAfter5Seconds {
	  animation: hideAnimation 0s ease-in 3s;
	  animation-fill-mode: forwards;
	}

	@keyframes hideAnimation {
	  to {
	    visibility: hidden;
	    width: 0;
	    height: 0;
	  }
	}
</style>
<?php 

	// include "header.php";
	$controller = Core_Controller::get_instance();
	$transient = Transient::get_instance();


	$controller->load_view( 'header' );
	if ( empty($action) ) {
		$action = 'index' ;
	}
if (isset ( $_GET[ 'query' ])) {
if ( $_GET[ 'query' ] != 'page/about' &&  $_GET[ 'query' ] != 'page/contact'  ) {
		echo $this->display_error(); 
	 	echo $this->error_box();
	}
}

	$controller->load_view( $action );
	
	

	
?>

