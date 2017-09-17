<?php get_header(); ?>

	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="container-fluid dark-bg" id="home" data-midnight="dark">
	        <div class="row">
	            <div class="container main">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <img src="<?php bloginfo('template_directory'); ?>/img/whiteKeys.png">
	                    <h4 class="sub-heading text-uppercase"><?php foreach ((get_the_category()) as $category) {
	                    	echo $category->cat_name . ' ';
	                    } ?></h4>
	                    <h1 class="headline text-uppercase"><?php the_title(); ?></h1>
	                    <div class="col-md-offset-5 col-md-2"><hr class="line" /></div>
	                </div>
	                <div class="col-md-6 col-md-offset-3 vb-head-info">
	                    <div class="average-difficulty">
	                        <h3><span>Average ROI:</span> 58%</h3>
	                    </div><div class="average-difficulty">
	                        <h3><span>difficulty:</span> Begginer</h3>
	                    </div>
	                </div>
	                <span class="icon-down_arrow arrow-down"></span>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-head" data-midnight="light">
	        <div class="row pattern">
	            <div class="container grid">
	                <div class="row">
	                    <div class="col-md-2 col-md-offset-2"><div class="one"></div></div>
	                    <div class="col-md-2"><div class="one"></div></div>
	                    <div class="col-md-2"><div class="one"></div></div>
	                    <div class="col-md-2"><div class="one"></div></div>
	                    <div class="col-md-2"><div class="one"></div></div>
	                </div>
	            </div>
	            <div class="container main">
	                <div class="col-md-10 col-md-offset-1">
	                    <div class="featured-img featured-img-big" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/vbsingle.jpg');"></div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-body" data-midnight="light">
	        <div class="row">

	            <div class="container main">
	                <div class="col-md-1 col-md-offset-1 post-numz">
	                    <h3>01</h3>
	                </div>
	                <div class="col-md-1">
	                    <hr class="dark-line" />
	                </div>
	                <div class="col-md-8">
	                    <h4 class="post-headline">Web Design speed art - monter</h4>
	                    <div class="post-body">
	                        <?php the_content(); ?>
	                    </div>
	                </div>
	                <div class="col-md-8 col-md-offset-3 cleatfix post-body-param">
	                    <div class="subject">
	                        <p>
	                        	<?php foreach ((get_the_category()) as $category) {
	                    			echo $category->cat_name . ' ';
	                    		} ?>
	                    	</p>
	                    </div><div class="tags">
	                        <p>
	                        	<?php 
	                        		$tags= get_tags();
	                        		foreach ($tags as $tag) {
	                        			echo $tag -> name . ', ';
	                        		}
	                        	?>
	                        </p>
	                    </div><div class="date-of-post">
	                        <p><?php the_time('F j, Y'); ?></p>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <p class="text-right">Share this post:</p>
	                </div>
	                <div class="col-md-8">
	                    <ul class="post-icons">
	                        <li><a href="#"><span class="icon-fb"></span></a></li>
	                        <li><a href="#"><span class="icon-tw"></span></a></li>
	                        <li><a href="#"><span class="icon-insta"></span></a></li>
	                        <li><a href="#"><span class="icon-in"></span></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-comments" data-midnight="light">
	        <div class="row pattern">
	            <div class="container grid">
	                <div class="col-md-2 col-md-offset-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	            </div>
	            <div class="container main">
	                <?php comments_template( '', true ); ?>
	            </div>
	        </div>
	    </section>
	    

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

<?php get_footer(); ?>
