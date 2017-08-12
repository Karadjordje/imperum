<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
        <!-- My Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/icons/style.css">

		<!-- Bootstrap core CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<div class="head-nav">
	        <div class="container">
	            <div class="row">
	                <div class="col-xs-2 custum-nav">
	                    <h1 class="logo">Imperium</h1>
	                    <p class="sub-heading">....</p>
	                    <ul>
	                </div>
	                <div class="col-xs-10">
	                    <p class="rotate">Follow us:</p>
	                </div>
	            </div>
	        </div>
	    </div>

		<div class="style-nav">
	        <nav class="container">
	            <div class="row">
	                <div class="col-xs-2 custum-nav">
	                   <!--  <h1 class="logo">Imperium</h1>
	                    <p class="sub-heading">....</p> -->
	                    <ul>
	                        <li class="active"><a href="<?php bloginfo('url'); ?>">Home</a></li>
	                        <li><a href="<?php echo site_url(); ?>/Service/">Service</a></li>
	                        <li><a href="#">Portfolio</a></li>
	                        <li><a href="#">Videoblog</a></li>
	                        <li><a href="#">Contact</a></li>
	                    </ul>
	                </div>
	                <div class="col-xs-10">
	                    <!-- <p class="rotate">Follow us:</p> -->
	                    <ul class="icons">
	                        <li><a href="#"><span class="icon-fb"></span></a></li>
	                        <li><a href="#"><span class="icon-tw"></span></a></li>
	                        <li><a href="#"><span class="icon-insta"></span></a></li>
	                        <li><a href="#"><span class="icon-in"></span></a></li>
	                    </ul>
	                </div>
	            </div>
	        </nav>
	    </div>	    