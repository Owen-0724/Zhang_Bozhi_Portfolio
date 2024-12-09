<!doctype html>
<html>
<?php
require_once('includes/connect.php');
$query = 'SELECT projects.id AS project,project_name, img, cover_img FROM projects,files WHERE file_id = files.id';
$results = mysqli_query($connect,$query);
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
		<a href="index.php"  id="header_logo" class="l-col-start-1 l-col-end-2">
		<img src="/images/logo.svg">
		</a>
		<div id="menu" class="m-col-start-7 m-col-end-13 l-col-start-9 l-col-end-13">
			<ul>
				<li><a href="projects.html">PROJECTS</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="contact.html">CONTACT</a></li>
			</ul>
		</div>
		
		<img src="/images/bar.svg" class="col-start-4 col-end-5 hidden" id="bar" height="17px"
		>
		<button id="burger" class="col-start-4 col-end-5"></button>
		

		
	</header>
	<div id="burger-con" class="grid-con col-span-full">
				<ul>
					<li><a href="projects.html">PROJECTS</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
	</div>

	<section id="home-top" class="grid-con">
		<h2 class="hidden">top</h2>
		<div class="spacing_160 col-span-full"></div>
		<div class="col-start-1 col-end-5 l-col-start-1 l-col-end-13" id="welcome_stack">
			<p class="home_welcome" id="home_welcome_1">
				WELCOME
			</p>
			<p class="home_welcome" id="home_welcome_2">
				WELCOME
			</p>
			<p class="home_welcome" id="home_welcome_3">
				WELCOME
			</p>
		</div>
		<div class="spacing_80 col-span-full moblie_spacing"></div>

		<pre class="col-start-1 col-end-5 l-col-start-1 l-col-end-13" id="short_description">
I am Owen, 
a graphic designer & 
motion designer.

		</pre>
		<div class="spacing_160 col-span-full"></div>
		<img src="images/up.svg" height="62px" class="col-span-full" id="up_icon">
		<div class="spacing_160 col-span-full"></div>
	</section>

	
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

<!--

		<p class="col-start-1 col-end-4 l-col-start-8 l-col-end-13">PROJECT NAME</p>
		<p class="col-start-1 col-end-4 l-col-start-8 l-col-end-13">Project #1</p>
		<div class="spacing_20 col-span-full"></div>
		<p class="col-start-1 col-end-4 l-col-start-8 l-col-end-13">DESCRIPTION</p>
		<p class="col-start-1 col-end-5 l-col-start-8 l-col-end-13">Lorem ipsum odor amet, consectetuer adipiscing elit. Turpis consectetur aliquam posuere laoreet maximus. Mauris curae erat mauris non facilisi nascetur. Vulputate malesuada sapien non aptent, venenatis vulputate lacinia. Sodales per faucibus luctus ut, turpis habitasse ornare nisi.</p>
		<p class="col-start-4 col-end-5 l-col-start-8 l-col-end-13">YEAR</p>
		<p class="col-start-4 col-end-5 l-col-start-8 l-col-end-13">2024</p>

		<div class="spacing_60 col-span-full"></div>

		<div class="col-start-1 col-end-4">
			<video class="player" id="video_2s" poster="images/placeholder.jpg">
				<source src="video/video.mp4" type="video/mp4">
				<source src="video/video.webm" type="video/webm">
				<p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
			</video>
		</div>

		<div class="spacing_60 col-span-full"></div>

		<p class="col-start-1 col-end-4">PROJECT NAME</p>
		<p class="col-start-1 col-end-4">Project #2</p>
		<div class="spacing_20 col-span-full"></div>
		<p class="col-start-1 col-end-4">DESCRIPTION</p>
		<p class="col-start-1 col-end-5">Lorem ipsum odor amet, consectetuer adipiscing elit. Turpis consectetur aliquam posuere laoreet maximus. Mauris curae erat mauris non facilisi nascetur. Vulputate malesuada sapien non aptent, venenatis vulputate lacinia. Sodales per faucibus luctus ut, turpis habitasse ornare nisi.</p>
		<p class="col-start-4 col-end-5">YEAR</p>
		<p class="col-start-4 col-end-5">2024</p>
-->
	</section>

<section class="grid-con">
<?php
$cell = 0;
while ($row = mysqli_fetch_assoc($results)) {
    if ($cell == 3) {
        $cell = 1;
    } else {
        $cell++;
    }
    
    if ($cell == 1) {
        echo '<img src="images/' . htmlspecialchars($row['cover_img']) . '" class="col-span-full m-col-start-1 m-col-span-4 img">';
    } else if ($cell == 2) {
        echo '<img src="images/' . htmlspecialchars($row['cover_img']) . '" class="col-span-full m-col-start-5 m-col-span-4 img">';
    } else {
        echo '<img src="images/' . htmlspecialchars($row['cover_img']) . '" class="col-span-full m-col-start-9 m-col-span-4 img">';
    }
}
?>
<P class="col-start-2 col-span-2 m-col-start-5 m-col-span-4 more_info">MORE INFO</P>

</section>
	<h2 class="line_h2 line_l">ABOUT</h2>

	<section class="grid-con">
		<h2 class="hidden">ABOUT</h2>
		<p class="col-span-full m-col-start-6 m-col-end-13" id="about_text">Hello, I am Owen, 
			a graphic designer and motion designer.
			I have a great passion for video creation and have always been enthusiastic about creating various sci-fi and futuristic motion graphics. </p>
		<P class="col-start-2 col-span-2 m-col-start-6 m-col-span-4 more_info">MORE INFO</P>	
	</section>

	<h2 class="line_h2 line_r">CONTACT</h2>

	<section class="grid-con">
		<h2 class="hidden">CONTACT</h2>


		<img src="images/chat.svg" height="52px" class="col-span-full" id="chat_icon">



		<p class="col-start-2 col-span-2 m-col-start-5 m-col-span-4 l-col-start-5 l-col-span-4 " id="contct_now">CONTACT NOW</p>
	</section>

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
