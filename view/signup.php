<?php
	include "controller/functions.php";
	if ( isset( $_SESSION[ 'user' ] ) ){
		header( 'location:?action=home' );
	}
?>


<div class=" cls2" id="Signup">

	<h3 id="" class="text-warning">Signup Here</h3>
	<form method="post" action="">
	  <div class="mb-3">
	    <label  class="form-label">First Name</label>
	    <input type="text" class="form-control" name="username" >
	  </div>
	  <div class="mb-3">
	    <label  class="form-label">Last Name</label>
	    <input type="text" class="form-control" name="lastname" >
	  </div>
	  <div class="mb-3">
	    <label  class="form-label">Email</label>
	    <input type="email" class="form-control" name="email">
	  </div>
	  <div class="mb-3">
	    <label  class="form-label">Password</label>
	    <input type="password" class="form-control" name="password">
	  </div>
	  <div class="mb-3 ">
	  	Already a member? <a href="?action=login" class="link"> Login  </a>
	  </div>
	  <div class="mb-3">
	  	<input type="submit" name="signup" class="btn btn-warning center" value="Signup">
	  </div> 
	</form>
</div>	
