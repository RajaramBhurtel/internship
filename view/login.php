<?php
include "controller/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Login </title>
</head>
<body >
	<div class=" cls2" id="login">
		<h3 id="" class="text-success">Login Form</h3>
		<form method="post" action="">
		  <div class="mb-3">
		    <label  class="form-label">Username</label>
		    <input type="text" class="form-control" name="username" >
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">Password</label>
		    <input type="password" class="form-control" name="password">
		  </div>
		  <div class="mb-3">
		  	Dont have membership? <a href=""> Signup </a>
		  </div>
		  <div class="mb-3">
		  	<input type="submit" name="login" class="btn btn-success center" value="Login">
		  </div>
		  
		</form>
	</div>

	<div class=" cls1" id="Signup">
	
		<h3 id="" class="text-success">Signup Here</h3>
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
		  <div class="mb-3">
		  	Already a member? <a href=""> Login  </a>
		  </div>
		  <div class="mb-3">
		  	<input type="submit" name="signup" class="btn btn-success center" value="Signup">
		  </div> 
		</form>
	</div>	
</body>
</html>