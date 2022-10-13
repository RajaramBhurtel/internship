<?php 
	include "controller/functions.php";
	
	if ( ! isset( $_SESSION[ 'user' ] ) ){
		header( 'location:/office/' );
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
	Welcome here..
	<?php print_r( $_SESSION ['user']); ?>
	<form action="" method="POST"> 
      <button type="submit" name="logout" class="btn btn-primary">Logout</button>
	</form>
	
</body>
</html>