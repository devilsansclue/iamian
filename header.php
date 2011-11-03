<!DOCTYPE html>
<html lang="en" class="">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

		<title>IamIan.me</title>

		<!-- The framework -->
		<link rel="stylesheet" href="<?php echo( bloginfo( 'template_directory' )); ?>/css/inuit.css" />
		<link rel="stylesheet" href="<?php echo( bloginfo( 'template_directory' )); ?>/css/grid.inuit.css" />

		<!-- wp core -->
		<link rel="stylesheet" href="<?php echo( bloginfo( 'template_directory' )); ?>/css/wp-core.css" />

		<!-- Your extension -->
		<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:bold' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo( bloginfo( 'template_directory' )); ?>/style.css" />

		<!-- Favicons and the like 
		<link rel="shortcut icon" href="icon.png" />
		<link rel="apple-touch-icon-precomposed" href="icon.png" />-->
	</head>
	<body class="wrapper">
			<?php wp_nav_menu(array(
				'name' => 'Main',
				'container'       => 'nav', 
				'container_class' => '', 
			)); ?>
		<section id="main" class="grids">
			<section id="left" class="grid-12">
				<header class="grid-12">
						<h1 id="logo" class="grid-6">IAMIAN.ME</h1>
						<section class="grid-5 tweets">
							<?php dynamic_sidebar('Header'); ?>
						</section>
				</header>
<!-- end header -->