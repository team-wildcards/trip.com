<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('./shared/head.innerhtml.php'); ?>

	<link rel="stylesheet" href="./assets/css/index.css">
	
	<title>Login to Trip</title>
</head>

<body>
	<?php include('./shared/titlebar.php'); ?>

	<main>
		<div class="background-art">		
			<img src="assets/images/top-bg.png" />
			<img src="assets/images/bottom-bg.png" />
		</div>
		
		<form class="form is-login" target="login.php">
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
				<input type="password" placeholder="Confirm Password">
			</div>

			<a class="form__link is-forgot-password" href="#">
				Forgot Password?
			</a>

			<input type="submit" class="form__submit" value="LOG IN">

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
