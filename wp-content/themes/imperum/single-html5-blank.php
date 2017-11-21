<?php get_header(); ?>

	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="container-fluid dark-bg" id="home" data-midnight="dark">
	        <div class="row">
	            <div class="container main text-center specVH">
	                <div class="col-md-8 col-md-offset-2 text-center clearfix">
	                    <img src="<?php bloginfo('template_directory'); ?>/img/whiteKeys.png">
	                    <h4 class="sub-heading text-uppercase"><?php foreach ((get_the_category()) as $category) {
	                    	echo $category->cat_name . ' ';
	                    } ?></h4>
	                    <h1 class="headline text-uppercase"><?php the_title(); ?></h1>
	                    <div class="col-sm-offset-5 col-sm-2 clearfix"><hr class="line" /></div>
	                </div>
	                <div class="col-md-6 col-md-offset-3 vb-head-info">
	                    <div class="average-difficulty">
	                        <h3><span>Spent Time:</span>26h<?php the_field('spent_time') ?></h3>
	                    </div><div class="average-difficulty">
	                        <h3><span>Difficulty:</span>BEGINNER <?php the_field('difficulty') ?></h3>
	                    </div>
	                </div>
	                <span class="icon-down_arrow arrow-down"></span>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-head" data-midnight="light">
	        <div class="row pattern">
	            <div class="container main">
	                <div class="row">
	                	<div class="col-xs-12 col-lg-10 col-lg-offset-1">
	                	    <div class="featured-img featured-img-big" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
	                	</div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-body" data-midnight="light">
	        <div class="row">
	            <div class="container main">
                	<div class="row">
	                	<div class="col-xs-12 col-lg-10 col-lg-offset-1">
	                		<div class="single-video-preview">
	                			<div class="single-video-preview-head">
                				    <h3><?php the_field('post_number') ?></h3>
                				    <h4 class="post-headline">Web Design speed art - monter</h4>
	                			</div>
	                			<div class="single-video-preview-body">
                				    <div class="post-body">
                				        <?php the_content(); ?>
                				    </div>
	                				<div class="single-video-preview-cats">
	                				    <div class="subject">
	                				        <p>
	                				        	<?php foreach ((get_the_category()) as $category) {
	                				    			echo $category->cat_name . ' ';
	                				    		} ?>
	                				    	</p>
	                				    </div>
	                				    <div class="tags">
	                				        <p>
	                				        	<?php
													$posttags = get_the_tags();
													if ($posttags) {
													  	foreach($posttags as $tag) {
													    	echo $tag->name . ' ';
													  	}
													}
												?>
	                				        </p>
	                				    </div>
	                				    <div class="date-of-post">
	                				        <p><?php the_time('j. m. Y'); ?></p>
	                				    </div>
	                				</div>
	                			</div>
            					<div class="social-video">
            						<div class="social-text">
            						    <p>Share this post:</p>
            						</div>
            						<div class="social-icons">
            						    <ul>
            						        <li><a href="#"><span class="icon-Facebook-Icon"></span></a></li>
            						        <li><a href="#"><span class="icon-Twitter-Icon"></span></a></li>
            						        <li><a href="#"><span class="icon-Google-Plus-Icon"></span></a></li>
            						        <li><a href="#"><span class="icon-Pinterest-Icon"></span></a></li>
            						    </ul>
            						</div>
            					</div>
	                		</div><!-- END single-video-preview -->
	                	</div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vbSingle-comments" data-midnight="light">
	        <div class="row pattern">
	            <div class="container main">
                	<div class="row">
	                	<div class="col-xs-12 col-lg-10 col-lg-offset-1">
	              			<?php comments_template( '', true ); ?>
	              		</div>
	              	</div>
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
