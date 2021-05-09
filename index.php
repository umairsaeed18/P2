<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
		<link rel="stylesheet" href="styles/style.css">
		<title>Portfolio - Umair Saeed</title>
	</head>
	<body>
		<aside>
			<nav  id="mySidenav" class="sidenav">
				<a href="#hero" id="home"><i class="fa fa-home"></i>Home</a>
				<a href="#aboutsection" id="about"><i class="fas fa-address-card"></i>About</a>
				<a href="#portsection" id="folio"><i class="fas fa-briefcase"></i>Portfolio</a>
				<a href="#contact" id="contact"><i class="fas fa-at"></i>Contact</a>
			</nav>
		</aside>
		<nav class="mobile-nav">
			<a href="#home">Home</a>
			<a href="#about">About</a>
			<a href="#folio">Folio</a>
			<a href="#contact">Contact</a>
		</nav>
		<section id="hero">
			<div class="containerHero">
			<div class="right-section">
				<div class="right-section-wrapper">
					<h1 class="title">Umair Saeed</h1>
					<h3 class="description">
						See how experienced developers solve problems in real-time. 
						<div style="width:400px;" class="container-2">
							<h1 class="typing"></h1>
						</div>
					</h3>
				</div>
			</div>
		</section>
		<!-- ======= About Section ======= -->
		<section id="aboutsection" class="aboutsection">
			<div class="section-title-about">
				<h2>About</h2>
			</div>
			<div class="card-container">
				<div class="float-layout">
					<div class="card-image">
						<img src="img/profile-img.jpg" class="img-fluid" alt="">
						<div class="card">
							<div class="card-desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper
								mollis tempus. Mauris eu maximus lectus, eu auctor justo. Aenean porta purus
								vel commodo consequat.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Section -->

		<section id="portsection" class="portsection">
			<div class="section-title-about">
				<h2>Leeruitkomsten</h2>
			</div>
			<div class="port-container">
				<div class="port-card">
					<img class="card-img"src="img/im.jpg" alt="Interactive Media">
					<h1>Leeruitkomst #1</h1>
					<p>Interactive Media</p>
				</div>
				<div class="port-card">
				<img class="card-img"src="img/dev.jpg" alt="Development">
					<h1>Leeruitkomst #2</h1>
					<p>Development</p>
				</div>
				<div class="port-card">
				<img class="card-img"src="img/des.jpg" alt="Design">
					<h1>Leeruitkomst #3</h1>
					<p>Design</p>
				</div>
				<div class="port-card">
				<img class="card-img"src="img/res.jpg" alt="Research">
					<h1>Leeruitkomst #4</h1>
					<p>Research</p>
				</div>
				<div class="port-card">
				<img class="card-img"src="img/com.jpg" alt="Communication">
					<h1>Leeruitkomst #5</h1>
					<p>Communication</p>
				</div>
				<div class="port-card">
				<img class="card-img"src="img/pi.jpg" alt="Professional Identity">
					<h1>Leeruitkomst #6</h1>
					<p>Professional Identity</p>
				</div>
			</div>
		</section>
		<!-- End #main -->
		<script src="js/main.js"></script>
	</body>
</html>