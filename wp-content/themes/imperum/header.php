<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <!-- My Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">

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

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
	</head>
	<body <?php body_class(); ?>>

		<!-- I load this HTML only front page (HTML for loading screen) -->
		<?php if ( is_front_page() ) { ?>
			<div id="loadingPage">
		        <h1><span class="icon-Logo midnightLogo"></span></h1>
		        <div class="loadingContent">
		        	<img class="center-block" src="<?php bloginfo('template_directory'); ?>/img/landingLogo.png">
		        	<div id="progressbar"></div>
		        </div>
				<div class="loadingFooter">
		        	<h4>Dare to be extraordinary.</h4>
		    	</div>
		    </div>
		<?php } ?>

	<!-- Do not load this HTML on pricing plan page (HTML for navigation) -->
	<?php if ( !is_page('pricing-plan') ) : ?>
	    <div class="container small-nav">
	        <div class="small-logo">
	            <span class="icon-Logo logo"></span>
	            <span class="icon-Burger btnSmallNav"></span>
	        </div>
	    </div>

	    <div class="smallNav" style="display: none;">
	    	<span class="icon-X"></span>
	    	<ul>
	    		<li class="scrollToHome"><a href="<?php if(!is_front_page()) echo home_url(); else echo '#' ?>">Home</a></li>
	    		<li><a href="<?php echo site_url(); ?>/service/">Service</a></li>
	    		<li><a href="<?php echo site_url(); ?>/portfolio/">Portfolio</a></li>
	    		<li><a href="<?php echo site_url(); ?>/videoblog/">Videoblog</a></li>
	    		<li class="scrollToContact"><a href="<?php if(!is_front_page()) echo home_url(); ?>#contact">Contact</a></li>
	    	</ul>
	    </div>

	    <div class="head-nav">
	        <span class="icon-Logo midnightLogo"></span>
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
	            	<a href="<?php echo site_url(); ?>/Service/">Services</a>
	            </li>
	            <li class="<?php if(is_page('Portfolio')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/portfolio/">Portfolio</a>
	            </li>
	            <li class="<?php if(is_page('Videoblog')) echo 'active'; ?>">
	            	<a href="<?php echo site_url(); ?>/videoblog/">Videoblog</a>
	            </li>
	            <li class="scrollToContact">
	            	<a href="<?php if(!is_front_page()) echo home_url(); ?>#contact">Contact</a>
	            </li>
	        </ul>
	    </div>

	    <div class="icons-nav">
	        <ul class="icons">
	            <li><a href="https://www.facebook.com/imperium.mmxvii" target="_blank"><span class="icon icon-Facebook-Icon"></span></a></li>
	            <li><a href="https://www.behance.net/imperiumine560" target="_blank"><span class="icon icon-Behance-Icon"></span></a></li>
	            <li><a href="https://www.instagram.com/imperium_studio/" target="_blank"><span class="icon icon-Instagram-Icon"></span></a></li>
	            <li><a href="https://www.linkedin.com/in/imperiumwebstudio" target="_blank" class="special"><span class="icon icon-Linked-In-Icon"></span></a></li>
	        </ul>
	    </div>

	<?php endif; ?>
