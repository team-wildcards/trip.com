<?php include('./shared/layout_top.php'); ?>

	<script>
		$(document).ready(function() {
			$(".glyphicon").click(function() {
				$(this).toggleClass("glyphicon-eye-close").toggleClass('glyphicon-eye-open');
				var input = $(this).prev().attr("type");
				if (input == "password")
					$(this).prev().attr("type", "text");
				else
					$(this).prev().attr("type", "password");
			});
		});
	</script>
	<div class="form">
		<form id="form">
			<i class="fa fa-envelope icon"></i><input type="email" name="email" placeholder=" | Email">
			<i class="fa fa-lock icon"></i><input type="password" name="password" placeholder=" | Password"><i class="glyphicon glyphicon-eye-open"></i><br>
			<p class="password">Forgot? <a class="link" href="#">Password</a></p>
			<input type="submit" class="submit" value="LOGIN">
			<p class="register">New here? <a href="#" class="link">Register</a></p>
		</form>
	</div>


<?php include('./shared/layout_bottom.php'); ?>