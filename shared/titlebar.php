<!-- This is a title bar, with branding (title & logo) to the left, and navigation to the right. -->
<style>
	.navbar {
		background-color: var(--primary-color-dark);
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

	.nav-item.active#sign-out {
		background-color: var(--secondary-color);
		border-radius: 5px;
		margin: 0 10px;
	}

	.nav-item.active#sign-out > a.nav-link {
		color: var(--primary-color);
		font-style: bold;
		text-align: center;
	}

	.navbar-toggler {
		position: absolute;
		right: 20px;
		top: 10px;
		z-index: 1;
		width: 150px;
	}

	.navbar-toggler .nav-item {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 20;
	}

	.navbar-toggler .nav-item .nav-link {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
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
			<li class="nav-item active" id="sign-out">
				<a class="nav-link" href="logout.php">Sign Out</a>
			</li>
		</ul>
	</nav>

	<!-- Disabled 'cos it currently doesn't work as expected -->
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
		
		<li class="nav-item active" id="sign-out">
			<a class="nav-link" href="logout.php">Sign Out</a>
		</li>
	</button>
</header>