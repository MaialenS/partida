<?php

include_once ('src/includes.php');
session_name('partida');
session_start();
// $_SESSION['sesion_iniciada']=false;
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Partida</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/styles.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	</head>
	<body>

		<div class="brand">
			Titulo de la Partida
		</div>
		<div class="address-bar">
			Lema de la partida o lo que sea
		</div>

		<?php
		if ($_SESSION['sesion_iniciada'] == false) {
			include_once 'login.php';

		} else {
			echo 'estas conectada';
		}
		?>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>
							Copyright &copy; Your Website 2015
						</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<?php
		if ($_SESSION['sesion_iniciada'] == false) {
			echo '<script src="js/sha1.js"></script>';
			echo '<script src="js/login.js"></script>';
		} else {

		}
		?>
	</body>
</html>
