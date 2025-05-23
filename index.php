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

	<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
	
	<title>Portfolio</title>
</head>
<body>
	<video autoplay muted loop playsinline preload="auto" id="bg-video">
	<source src="video/loop.mp4" type="video/mp4">
	</video>
	
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

	<section id="home-top" class="grid-con">
		<h2 class="hidden">top</h2>
		<div class="spacing_160 col-span-full  m-col-start-3 m-col-end-11"></div>
		<div class="col-start-1 col-end-5 l-col-start-1 l-col-end-13  m-col-start-3 m-col-end-11" id="welcome_stack">
			
		</div>
		<div class="spacing_80 col-span-full moblie_spacing"></div>

		<pre class="col-start-1 col-end-5 l-col-start-1 l-col-end-7 m-col-start-3 m-col-end-7" id="short_description">
Hello
I am Owen, 
graphic designer
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

		<div class="player_l col-start-1 col-end-5 m-col-start-1 m-col-end-13">
			<video class="player" id="video_1" poster="images/demo_reel.jpg">
				<source src="video/demo_reel.mp4" type="video/mp4">
				<p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
			</video>
		</div>

	</section>

	<section class="grid-con img_group">
	
	<?php
	$cell = 0;

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
		if ($cell == 3) {
			$cell = 1;
		} else {
			$cell++;
		}

		$imageSrc = 'images/' . $row['cover_img'];

		if ($cell == 1) {
			echo '<img src="' . $imageSrc . '" class="col-span-full m-col-start-1 m-col-span-4 img img_x3">';
		} else if ($cell == 2) {
			echo '<img src="' . $imageSrc . '" class="col-span-full m-col-start-5 m-col-span-4 img img_x3">';
		} else {
			echo '<img src="' . $imageSrc . '" class="col-span-full m-col-start-9 m-col-span-4 img img_x3">';
		}
	}
	?>
	<P class="col-start-2 col-span-2 m-col-start-5 m-col-span-4 more_info"><a href="projects.php">MORE INFO</a></P>
	
	</section>
	<h2 class="line_h2 line_l">ABOUT</h2>

	<section class="grid-con">
		<h2 class="hidden">ABOUT</h2>
		<p class="col-span-full m-col-start-6 m-col-end-13" id="about_text">Hello, I am Owen, 
			a graphic designer and motion designer.
			I have a great passion for video creation and have always been enthusiastic about creating various sci-fi and futuristic motion graphics. </p>
		<P class="col-start-2 col-span-2 m-col-start-6 m-col-span-4 more_info"><a href="about.php">MORE INFO</a></P>	
	</section>

	<h2 class="line_h2 line_r">CONTACT</h2>

	<section class="grid-con">
		<h2 class="hidden">CONTACT</h2>
		<img src="images/chat.svg" height="52px" class="col-span-full" id="chat_icon">
		<p class="col-start-2 col-span-2 m-col-start-5 m-col-span-4 l-col-start-5 l-col-span-4 " id="contct_now"><a href="contact.php">CONTACT NOW</a></p>
		<p class="col-start-2 col-span-2 m-col-start-5 m-col-span-4 l-col-start-5 l-col-span-4 " id="resume"><a href="https://drive.google.com/file/d/1g3ndZ7r_zh3t_8c9794CaMp4oxT1KDBS/view?usp=sharing"  target="_blank" rel="noopener noreferrer">resume</a></p>
	</section>

	<footer class="grid-con footer">
		<img src="images/logo.svg" class="logo col-start-1 col-span-2 footer_logo">
		<div class="col-start-2 col-span-2 m-col-start-10 m-col-span-3 l-col-start-11 l-col-end-13 social_media_group">
			<a href="www.linkedin.com/in/owen-zhang-91a809345"  target="_blank"><img src="images/in.svg"></a>
			<a href="https://www.instagram.com/owen_z___/"  target="_blank"><img src="images/ins.svg"></a>
		</div>
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

	<script src="https://unpkg.com/lenis@1.3.1/dist/lenis.min.js"></script> 

	<script type="module" src="js/main.js"></script>
	<script>
document.addEventListener("DOMContentLoaded", () => {
  const bgVideo = document.getElementById("bg-video");

  if (bgVideo) {
    bgVideo.muted = true; // ensure it's muted
    const playPromise = bgVideo.play();

    if (playPromise !== undefined) {
      playPromise
        .then(() => {
          console.log("Background video autoplayed!");
        })
        .catch((error) => {
          console.warn("Autoplay blocked, waiting for user interaction...");
          const tryPlay = () => {
            bgVideo.play();
            document.removeEventListener("click", tryPlay);
            document.removeEventListener("touchstart", tryPlay);
          };
          document.addEventListener("click", tryPlay);
          document.addEventListener("touchstart", tryPlay);
        });
    }
  }
});
</script>

</body>
</html>
