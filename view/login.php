<?php 
	
	if ( $this->is_logged_in()) {
			
		}else{

?>
<div class=" cls2" id="login">

	<h3 id="" class="text-warning">Login Form</h3>
	<form method="post" action="/office/user/login">
	  <div class="mb-3">
	    <label  class="form-label">Username</label>
	    <input type="text" class="form-control" name="username" >
	  </div>
	  <div class="mb-3">
	    <label  class="form-label">Password</label>
	    <input type="password" class="form-control" name="password">
	  </div>
	  <div class="mb-3 ">
	  	Dont have membership? <a href="/office/user/signup" class="link"> Signup </a>
	  </div>
	  <div class="mb-3">
	  	<input type="submit" name="login" class="btn btn-warning center" value="Login">
	  </div>
	  
	</form>
</div>
<?php } ?>