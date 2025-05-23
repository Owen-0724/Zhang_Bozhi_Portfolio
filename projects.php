<!doctype html>
<html>
<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT projects.id AS project,project_name, img, cover_img FROM projects,files WHERE file_id = files.id');
$stmt->execute();
?>
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
		<a href="index.php"  id="header_logo" class="logo l-col-start-1 l-col-end-2">
		<img src="images/logo.svg">
		</a>
		<div id="menu" class="m-col-start-7 m-col-end-13 l-col-start-8 l-col-end-13">
			<ul>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li>
					<button id="theme-toggle" aria-label="Toggle Theme">
						<img id="theme-icon" src="images/theme.svg" alt="Toggle Theme" width="20px">
					</button>
				</li>	
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
	
	<h2 class="line_h2 line_r">PROJECTS</h2>

	<section class="grid-con player_section" >
		<h2 class="hidden">PROJECTS</h2>


		<div class="col-start-1 fill_l"></div>

		<div class="player_l col-start-1 col-end-5 m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12">
			<video class="player" id="video_1" poster="images/demo_reel.jpg">
				<source src="video/demo_reel.mp4" type="video/mp4">
				<p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
			</video>
		</div>

	</section>

	<section  class="grid-con">
		<h2 class="hidden">images</h2>
	<?php
	$cell = 0;
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if ($cell == 2) {
			$cell = 1;
		} else {
			$cell++;
		}
		
		if ($cell == 1) {
			echo '<a href="case.php?id='.$row['project'].'" class="col-span-full m-col-start-1 m-col-span-6 img"><img src="images/' .$row['cover_img'] . '" ></a>';
		} else if ($cell == 2) {
			echo '<a href="case.php?id='.$row['project'].'" class="col-span-full m-col-start-7 m-col-span-6 img"><img src="images/' .$row['cover_img'] . '" ></a>';
		}
	}
	?>
	</section>
	<footer class="grid-con footer">
		<img src="images/logo.svg" class="logo col-start-1 col-span-2 footer_logo">
		<div class="col-start-2 col-span-2 m-col-start-10 m-col-span-3 l-col-start-11 l-col-end-13 social_media_group">
			<a href="https://www.linkedin.com/in/owen-zhang-91a809345/"  target="_blank"><img src="images/in.svg"></a>
			<a href="https://www.instagram.com/owen_z___/"  target="_blank"><img src="images/ins.svg"></a>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

	<script src="https://unpkg.com/lenis@1.3.1/dist/lenis.min.js"></script> 

	<script type="module" src="js/main.js"></script>
</body>
</html>
