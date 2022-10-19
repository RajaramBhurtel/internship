<?php 
	include 'helpers/clean.php';
	include 'helpers/get_array.php';
	cleanArr( $_POST );	



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script> -->
	<script src="https://kit.fontawesome.com/ab5aaeba7c.js" crossorigin="anonymous"></script>
	<title>Internship </title>
</head>
<body>
	<?php
		include "controller/user_controller.php";
		include "controller/session_controller.php";

		if( isLoggedIn() )	{
			include 'view/navbar.php';
		}

		include 'core/route.php';
		include 'view/footer.php';
		// print_r($_POST);
		// get_array($_POST);
	?>

</body>
</html>
		

