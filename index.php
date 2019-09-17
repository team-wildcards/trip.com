<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('./shared/head.innerhtml.php'); ?>
	
	<title>Login to Trip</title>
</head>

<body>
	<?php include('./shared/titlebar.php'); ?>

	<form class="form is-login">
		<label class="form__field">
			<i class="fa fa-envelope icon"></i>
			<input type="email" name="email" placeholder=" | Email">
		</label>

		<label class="form__field">
			<i class="fa fa-lock icon"></i>
			<input type="password" name="password" placeholder=" | Password">
			<i class="glyphicon glyphicon-eye-open"></i>
		</label>

		<a class="forgot-password" href="#">
			Forgot Password?
		</a>

		<input type="submit" class="submit" value="LOGIN">

		<p>
			New here?
			<a href="#" class="link">
				Register
			</a>
		</p>
	</form>

	<!--
		It is a common practise to include scripts at the bottom of the body.
		This ensures that your scripts are only run after all page content has loaded.
		As an example, you usually want JQuery to be included before your script runs.
	-->
	<script src="./scripts/index.js"></script>
</body>
</html>
