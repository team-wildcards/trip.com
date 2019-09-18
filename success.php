<?php
session_start();

//Proper Database configuration here
// include 'includes/db_connection.php';
include 'includes/functions.php';

?>
<!DOCTYPE html>
<html>

<head>
	<?php include('./shared/head.innerhtml.php'); ?>
	<!-- scripts -->
	<script src="https://kit.fontawesome.com/0807ea9fce.js"></script>
	<!-- styles -->
	<link rel="stylesheet" href="./assets/css/success.css">
	<!-- Title -->
	<title>Welcome Back to Trip</title>
</head>

<body>
	<?php include('./shared/titlebar.php'); ?>

	<p class="card">
		<i class="card__icon fas fa-check-circle"></i>
		<strong class="card__content">
			<?php
			if (isset($_SESSION['name'])) {
				echo "Welcome " . $_SESSION['name'] . "! <br>";
			}
			?>

			Your Sign in was successful
		</strong>
		<span>We're the Wildcards. And we're pleased to have you.</span>
	</p>
</body>

</html>