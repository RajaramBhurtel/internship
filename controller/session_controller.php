<?php 
	function isAdmin(){
		if ( isset( $_SESSION[ 'user' ] ) && $_SESSION[ 'user' ] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	function isLoggedIn(){
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}
?>