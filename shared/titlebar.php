<!-- This is a title bar, with branding (title & logo) to the left, and navigation to the right. -->
<style>
	.navbar {
		background-color: #200038;
		height: 10vh;
	}

	.navbar-text {
		height: 100%;
		display: flex;
		flex-flow: row nowrap;
		align-items: center;
		margin: 0;
	}

	.navbar-text__logo {
		height: 400%;
		display: block;
	}

	.nav-item {
		padding: 0 10px;
	}

	.nav-item.active {
		background-color: #FFE500;
		color: white;
		border-radius: 5px;
		margin: 0 10px;
		font-style: bold;
		text-align: center;
	}
</style>

<header class="navbar navbar-expand-md navbar-dark sticky-top">
	<h1 class="navbar-text">
		<img class="navbar-text__logo" 
				 src="assets/images/TripDotCom-white.svg"
				 alt="Trip dot com" />
	</h1>

	<nav class="collapse navbar-collapse" id="collapse_target"> 
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Our Team</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Login</a>
			</li>
		</ul>
	</nav>

	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
</header>