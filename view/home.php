<?php 
	// include "controller/functions.php";
	if ( ! isset( $_SESSION[ 'user' ] ) ){
		header( 'location:?action=login' );
	}
?>
 <?php  include "view/header.php"; ?>

<div class="container-fluid text-center" id="homebd">
	<h1>Changing the World Through Our Services</h1>
	<p class="lead">What you do makes a difference, and you have to decide what kind of difference you want to make.</p>
	<div>
		<a href="#" class="btn btn-large btn-info" id="btnlm">Learn More</a>
		<a href="#" class="btn btn-large btn-light"  id="btnlm">Learn Less</a>
	</div>
</div>




