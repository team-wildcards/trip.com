$(".is-show-password").click(()=> {
	$(this).toggleClass("fa-eye-slash").toggleClass('fa-eye');
	
	var input = $(this).prev().attr("type");
	if (input === "password")
		$(this).prev().attr("type", "text");
		
	else
		$(this).prev().attr("type", "password");
});

const toggleSignupForm = ()=> {
	let form = $('.form');
	form.addClass("transparent");

	setTimeout(()=> {
		form.toggleClass("is-login").toggleClass('is-signup');

		if (form.hasClass('is-signup')) {
			$('input[type="submit"]').attr("value", "SIGN UP");

			$(".form__link.is-signup-toggle").html(`
				Already have an account?
				<a href="#" onclick="toggleSignupForm()">
					Log in.
				</a>
			`)
		}
		else {
			$('input[type="submit"]').attr("value", "LOG IN");

			$(".form__link.is-signup-toggle").html(`
				New here?
				<a href="#" onclick="toggleSignupForm()">
					Sign up.
				</a>
			`)
		}
		
		form.removeClass("transparent");
	}, 1100)
}

$(".form__link.is-signup-toggle > a").click(toggleSignupForm);