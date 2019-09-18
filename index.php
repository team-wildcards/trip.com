<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('./shared/head.innerhtml.php'); ?>
	<?php include('./includes/functions.php'); ?>

	<link rel="stylesheet" href="./assets/css/index.css">

	<title>Login to Trip</title>
</head>

<body>
	<div class="background-art">
		<img src="assets/images/top-bg.png" />
		<img src="assets/images/bottom-bg.png" />
	</div>

	<h1 class="page-heading">
		<img class="page-heading__logo" src="assets/images/TripDotCom-white.svg" alt="Trip dot com" />
	</h1>

	<main>
		<form class="form is-login" action="login.php" method="POST">
			<!-- we display proper error or success messages -->
			<?php echo showAlert(); ?>

			<div class="form__field is-confirm-password">
				<i class="fa fa-user icon"></i>
				<input type="text" name="fullname" placeholder="Full Name">
			</div>

			<div class="form__field">
				<i class="fa fa-envelope icon"></i>
				<input type="email" name="email" placeholder="Email">
			</div>

			<div class="form__field">
				<i class="fa fa-lock icon"></i>
				<input type="password" name="password" placeholder="Password">
				<i class="fa fa-eye-slash icon is-show-password"></i>
			</div>

			<div class="form__field is-confirm-password">
				<i class="fa fa-lock icon"></i>
				<input type="password" name="confirm_password" placeholder="Confirm Password">
			</div>

			<a class="form__link is-forgot-password" href="#">
				Forgot Password?
			</a>

			<input type="submit" class="form__submit" name="login" value="LOG IN">

			<p class="form__link is-signup-toggle">
				New here?
				<a href="#">
					Sign up.
				</a>
			</p>
		</form>
	</main>

	<!--
		It is a common practise to include scripts at the bottom of the body.
		This ensures that your scripts are only run after all page content has loaded.
		As an example, you usually want JQuery to be included before your script runs.
	-->
	<script src="./scripts/index.js"></script>
</body>

</html>