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

		<!-- I load this HTML only front page (HTML for loading screen) -->
		<?php if ( is_front_page() ) { ?>
			<div class="loadingPage">
		        <h1>Imperium</h1>
		        <div class="loadingContent">
		        	<img class="center-block" src="<?php bloginfo('template_directory'); ?>/img/landingLogo.png">
		        	<div id="progressbar"></div>
		        </div>
				<div class="loadingFooter">
		        	<h3>Dare to be extraordinary.</h3>
		    	</div>
		    </div>
		<?php } ?>

	    <nav class="small-nav">
	        <div class="small-logo">
	            <h1 class="logo text-uppercase">Imperium <span class="glyphicon glyphicon-align-justify"></span></h1>
	        </div>
	        <ul>
	            <li class="scrollToHome <?php if ( is_front_page() ) echo 'active' ?>">
	            	<a href="<?php if(!is_front_page()) echo home_url(); else echo '#' ?>">Home</a>
	            </li>
	            <li class="<?php if(is_page('Service')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Service/">Service</a>
	            </li>
	            <li class="<?php if(is_page('Portfolio')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Portfolio/">Portfolio</a>
	            </li>
	            <li class="<?php if(is_page('Videoblog')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Videoblog/">Videoblog</a>
	            </li>
	            <li class="scrollToContact">
	            	<a href="<?php if(!is_front_page()) echo home_url(); ?>#contact">Contact</a>
	            </li>
	        </ul>
	    </nav>

	    <div class="head-nav">
	        <h1 class="logo text-uppercase">Imperium</h1>
	        <p class="logo-dots">....</p>
	    </div>

	    <div class="follow-nav">
	        <div class="follow-nav-container">
	            <p class="rotate">Follow us:</p>
	        </div>
	    </div>

	    <div class="style-nav">
	        <ul class="custom-nav">
	            <li class="scrollToHome <?php if ( is_front_page() ) echo 'active' ?>">
	            	<a href="<?php if(!is_front_page()) echo home_url(); else echo '#' ?>">Home</a>
	            </li>
	            <li class="<?php if(is_page('Service')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Service/">Service</a>
	            </li>
	            <li class="<?php if(is_page('Portfolio')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Portfolio/">Portfolio</a>
	            </li>
	            <li class="<?php if(is_page('Videoblog')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/Videoblog/">Videoblog</a>
	            </li>
	            <li class="scrollToContact">
	            	<a href="<?php if(!is_front_page()) echo home_url(); ?>#contact">Contact</a>
	            </li>
	        </ul>
	    </div>

	    <div class="icons-nav">
	        <ul class="icons">
	            <li><a href="#"><span class="icon-fb"></span></a></li>
	            <li><a href="#"><span class="icon-tw"></span></a></li>
	            <li><a href="#"><span class="icon-insta"></span></a></li>
	            <li><a href="#"><span class="icon-in"></span></a></li>
	        </ul>
	    </div>
