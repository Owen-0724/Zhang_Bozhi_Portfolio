<!doctype html>
<html>
<?php
require_once('includes/connect.php');
$query = 'SELECT * FROM projects,files WHERE file_id = files.id AND projects.id ='.$_GET['id'];
$results = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($results);

$img = explode(',', $row('files'));

echo $img['img'];
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
	<link href="css/grid.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">

	<script src="https://cdn.plyr.io/3.7.8/plyr.js" async></script>
	<script src="js/main.js" defer></script>
	<title>CASE STUDY</title>
</head>
<body>
	<header class="grid-con">
		<h1 class="hidden">Portfolio</h1>
		<a href="index.html"  id="header_logo" class="l-col-start-1 l-col-end-2">
		<img src="/images/logo.svg" height="14px">
		</a>
		<div id="menu" class="l-col-start-8 l-col-end-13">
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
	<div class="grid-con case_header">
		<h2 class="col-start-1 col-span-3 m-col-start-1 m-col-span-7 case_text">
			<?php echo $row['project_name'];?>
		</h2>
		
		<div class="col-start-4 col-span-1 m-col-start-12 m-col-span-1 text_r">
			<h3>YEAR</h3>
			<p class="case_p"><?php echo $row['date'];?></p>
		</div>
		
	</div>
	

	<section class="grid-con" id="case_1">
		<h2 class="hidden">CASE STUDY</h2>

		<img src="images/<?php echo $row['cover_img'];?>" class="col-span-full m-col-start-1 m-col-span-5 case_img">

		<!--
		<div class="col-start-1 m-col-start-7 fill_l"></div>
	-->
		<div class="col-span-full m-col-start-7 m-col-span-6">
			<h3>PROBLEM</h3>
			<p class="case_p"><?php echo $row['p1'];?></p>
		</div>
	</section>

	<section class="grid-con" id="case_2">
		<h2 class="hidden">CASE STUDY</h2>

		<img src="images/img1.png " class="col-span-full m-col-start-7 m-col-span-6 case_img">

		<div class="col-start-1 fill_l"></div>
		<div class="col-span-full m-col-start-1 m-col-span-5 text_solution">
			<h3>SOLUTION</h3>
			<p class="case_p"><?php echo $row['p2'];?></p>
		</div>
	</section>

	<h2 class="line_h2 line_l">FINAL PRODUCT</h2>

	<section class="grid-con">
		<h2 class="hidden">images</h2>
		<div class="player_case col-span-full">
			<video class="player" id="video_1" poster="images/placeholder.jpg">
				<source src="video/demo_reel.mp4" type="video/mp4">
				<source src="video/demo_reel.mp4" type="video/webm">
				<p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
			</video>
		</div>
			<img src="images/img1.png " class="col-span-full img">
			<img src="images/img1.png " class="col-span-full img">
			<img src="images/img1.png " class="col-span-full img">

	</section>


	<footer class="full-width-grid-con	">
		<img src="/images/logo.svg" height="14px" class="logo col-start-1 col-span-2 footer_logo">
		<div class="col-start-2 col-span-2 social_media_group">
			<img src="images/facebook.svg">
			<img src="images/x.svg">
			<img src="images/ins.svg">
		</div>
	</footer>

</body>
</html>