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
	<title>Portfolio</title>
</head>
<body>
	<header class="grid-con">
		<h1 class="hidden">Portfolio</h1>
		<a href="index.php"  id="header_logo" class="l-col-start-1 l-col-end-2">
		<img src="/images/logo.svg">
		</a>
		<div id="menu" class="m-col-start-7 m-col-end-13 l-col-start-9 l-col-end-13">
			<ul>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
		<img src="/images/bar.svg" class="col-start-4 col-end-5 hidden" id="bar" height="17px">
		<button id="burger" class="col-start-4 col-end-5"></button>	
	</header>
	<div id="burger-con" class="grid-con col-span-full">
		<ul>
			<li><a href="projects.php">PROJECTS</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</div>
	
	<h2 class="line_h2 line_r">ABOUT</h2>
	<section class="grid-con">
		<p class="col-start-2 col-span-3 m-col-start-5 m-col-end-12 l-col-start-5 l-col-end-12">Hello, I am Owen, 
		a graphic designer and motion designer.
		I have a great passion for video creation and have always been enthusiastic about creating various sci-fi and futuristic motion graphics. Visualizing music is my strong point, and my goal is to bring the greatest visual experience to the audience.
		</p>
	</section>
	<h2 class="line_h2 line_l">SOFTWARES</h2>
	<div class="grid-con">
	<pre class="text_softwares col-start-1 col-span-3 m-col-start-8 m-col-end-12">Adobe Illustrator
Adobe After Effect
Cinema 4D</pre>
	</div>
	<h2 class="line_h2 line_r">SERVICES</h2>
	<div class="grid-con">
	<pre class="text_services col-start-2 col-span-3 m-col-start-1 m-col-span-4">Graphic designer
Motion designer
Website designer
Website Developer</pre>
	</div>
	<footer class="grid-con footer">
		<img src="/images/logo.svg" class="logo col-start-1 col-span-2 footer_logo">
		<div class="col-start-2 col-span-2 m-col-start-10 m-col-span-3 l-col-start-11 l-col-end-13 social_media_group">
			<img src="images/facebook.svg">
			<img src="images/x.svg">
			<img src="images/ins.svg">
		</div>
	</footer>

</body>
</html>
