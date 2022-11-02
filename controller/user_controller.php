<?php
	session_start();
    include 'model/user.php';
    $user = new User();

	if( isset( $_POST[ 'logzin' ] ) ){
		$data = get_array( $_POST );
		$result = $user-> get_by( $data );

		if( null != $result ){
			$_SESSION[ 'user' ] = $result [ 0 ][ 'Username' ] ;
			echo "<script>alert('Successfully logged in.'); location.href='?action=home'; </script>";
		}
		else{
			echo "<script>alert('Log in failed.'); location.href='?action='; </script>";
		}
	}

	if( isset( $_POST[ 'signup' ] ) ){
		$result 	= $user-> save( get_array( $_POST ) );

		if ( null != $result ) {
			echo "<script>alert('Successfully Registered! Proceed to login.'); location.href='?action=login'; </script>";
		}	
	}

	if (isset ( $_POST[ 'update' ] ) ) {
		$id = $_POST[ 'id' ];
		$result 	= $user-> update( get_array( $_POST ) , $id );
		header( 'location:?action=users' );
	}

	if (isset( $_POST[ 'logout' ] ) ) {
		session_destroy();
    	unset($_SESSION[ ' user ' ]);
    	header( 'location:?action=index' );
	}

	if( isset ( $_GET[ 'delid' ] ) ){
    	$user -> delete( $_GET[ 'delid' ] );
  	}

  	if ( isset( $_GET[ 'action' ] ) && isset ( $_GET[ 'id' ] ) && ( $_GET[ 'action' ] ) == 'edit_user') {
		$result = $user -> get_by ( get_array($_GET) );
  		foreach( $result as $row ){
  			return $row;
  		}
  	}

  	if( isset( $_GET[ 'action' ] ) && ( $_GET[ 'action' ] ) == 'users' ) {
  		$total_pages = $user->get_total_pages();
		$rows = $user->get_total_rows();

  		if (!isset ( $_GET[ 'page' ] ) ) {  
		  $page = 1;
		  $i = 0;  
		} else {  
		  $page = $_GET[ 'page' ];  
		  if($page > $total_pages){
		  	$i = 0 ;
		  	return;
		  }
		  $i = 10 * ($page-1);
		}
  	}
?>