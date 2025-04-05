<!doctype html>
<html>
<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM projects JOIN files ON file_id = files.id WHERE projects.id = :id';
$stmt = $connection->prepare($query);
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$data = explode(',', $row['img']);
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">

	<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
	<script src="js/main.js" defer></script>
	<title>CASE STUDY</title>
</head>
<body>
<header class="grid-con">
		<h1 class="hidden">Portfolio</h1>
		<a href="index.php"  id="header_logo" class="logo l-col-start-1 l-col-end-2">
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
	<div class="grid-con case_header">
		<h2 class="col-start-1 col-span-3 m-col-start-1 m-col-span-7 case_text">
			<?php echo $row['project_name'];?>
		</h2>
		
		<div class="col-start-4 col-span-1 m-col-start-12 m-col-span-1 text_r">
			<h3>YEAR</h3>
			<p class="case_date"><?php echo $row['date'];?></p>
		</div>
		
	</div>
	

	<section class="grid-con" id="case_1">
		<h2 class="hidden">CASE STUDY</h2>

		<img src="images/<?php echo $row['cover_img'];?>" class="col-span-full m-col-start-1 m-col-span-5 case_img">

		<!--
		<div class="col-start-1 m-col-start-7 fill_l"></div>
	-->
		<div class="col-span-full m-col-start-7 m-col-span-6">
			<h3>Introduction</h3>
			<p class="case_p"><?php echo $row['p1'];?></p>
		</div>
	</section>

	<section class="grid-con" id="case_2">
		<h2 class="hidden">CASE STUDY</h2>

		<img src="images/<?php echo$data[2];?>" class="col-span-full m-col-start-7 m-col-span-6 case_img">

		<div class="col-start-1 fill_l"></div>
		<div class="col-span-full m-col-start-1 m-col-span-5 text_solution">
			<h3>PROCESS</h3>
			<p class="case_p"><?php echo $row['p2'];?></p>
		</div>
	</section>

	<h2 class="line_h2 line_l">FINAL PRODUCT</h2>

	<section class="grid-con">
		<h2 class="hidden">images</h2>
		<div class="player_case col-span-full">
			<video class="player" id="video_1" poster="images/<?php echo$data[1];?>">
				<source src="video/<?php echo$row['video'];?>" type="video/mp4">
				<p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
			</video>
		</div>
			<img src="images/<?php echo$data[3];?>" class="col-span-full img">
			<img src="images/<?php echo$data[4];?>" class="col-span-full img">
	

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

</body>
</html>
