<?php
	session_start();
    include 'model/user.php';
    // $user = new User();

	class User_controller extends User
	{
		function login ( $array ){
			$result = $this-> get_by( get_array( $_POST ) );
			
		if( null != $result ){
		$_SESSION[ 'user' ] = $result [ 0 ][ 'Username' ] ;
		echo "<script>alert('Successfully logged in.'); location.href='?action=home'; </script>";
		}
		else{
			echo "<script>alert('Log in failed.'); location.href='?action='; </script>";
		}
		}
	}
?>