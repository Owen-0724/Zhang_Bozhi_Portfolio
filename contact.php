<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">

	<script src="https://cdn.plyr.io/3.7.8/plyr.js" async></script>
	<script src="js/main.js" defer></script>
	<title>CONTACT</title>
</head>
<body>
<header class="grid-con">
		<h1 class="hidden">Portfolio</h1>
		<a href="index.php"  id="header_logo" class="l-col-start-1 l-col-end-2">
		<img src="images/logo.svg">
		</a>
		<div id="menu" class="m-col-start-7 m-col-end-13 l-col-start-9 l-col-end-13">
			<ul>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
		<img src="images/bar.svg" class="col-start-4 col-end-5 hidden" id="bar" height="17px">
		<button id="burger" class="col-start-4 col-end-5"></button>	
	</header>
	<div id="burger-con" class="grid-con col-span-full">
		<ul>
			<li><a href="projects.php">PROJECTS</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</div>
	
	<h2 class="line_h2 line_l">CONTACT</h2>

	<section id="contact" class="grid-con">
		<h2 class="hidden">mid</h2>
		<div id="contact_form" class="col-span-full m-col-start-2 m-col-end-12 l-col-start-4 l-col-end-10">
			<form id="form">
				<input type="email" placeholder="Email" id="email">
				<input type="text" required placeholder="First & Last Name" id="name">
				<input type="text" required placeholder="Topic" id="topic">
				<textarea type="text" placeholder="Comments here" id="comments"></textarea>
				<input type="submit" value="SUBMIT">
				<section id="feedback"><p>*Please fill out all required sections</p></section>
			</form>
		</div>
	</section>


	<footer class="grid-con footer">
		<img src="images/logo.svg" class="logo col-start-1 col-span-2 footer_logo">
		<div class="col-start-2 col-span-2 m-col-start-10 m-col-span-3 l-col-start-11 l-col-end-13 social_media_group">
			<img src="images/facebook.svg">
			<img src="images/x.svg">
			<img src="images/ins.svg">
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</body>
</html>
