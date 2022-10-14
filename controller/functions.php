<?php
	session_start();
    include 'model/user.php';
    	$user = new User();
	if( isset( $_POST[ 'login' ] ) ){
		$username   = $_POST[ 'username' ];
		$password 	= $_POST[ 'password' ];
		$result 	= $user-> get_by( array (
			"Username"  => $username,
			"Password"  => $password
		) );

		if( null != $result ){
			$_SESSION[ 'user' ] = $result [ 0 ][ 'Username' ] ;
			echo "<script>alert('Successfully logged in.'); location.href='?action=home'; </script>";
		}
		else{
			echo "<script>alert('Log in failed.'); location.href='?action='; </script>";
		}
	}

	if( isset( $_POST[ 'signup' ] ) ){
		$username   = $_POST[ 'username' ];
		$lastname	= $_POST[ 'lastname' ];
		$email		= $_POST[ 'email'];
		$password 	= $_POST[ 'password' ];
		
		$result 	= $user-> save( array(
		"Username"  => $username,
		"Lastname"	=> $lastname,
		"Email" 	=> $email,
		"Password"  => $password
		) );

		if ( null != $result ) {
			echo "<script>alert('Successfully Registered! Proceed to login.'); location.href='?action=login'; </script>";
			
		}	
	}

	if (isset( $_POST[ 'logout' ] ) ) {
		session_destroy();
    	unset($_SESSION[ ' user ' ]);
    	header( 'location:?action=index' );
	}

?>