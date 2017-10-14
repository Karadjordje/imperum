<?php /* Template Name: Portfolio */ ?>

<?php get_header(); ?>

		<section class="container-fluid dark-bg" id="home" data-midnight="dark">
	        <div class="row">
	            <div class="container main">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <img src="<?php bloginfo('template_directory'); ?>/img/whiteKeys.png">
	                    <h4 class="sub-heading text-uppercase" id="shortDescription">Short movie</h4>
	                    <h1 class="headline">Crossroads</h1>
	                    <div class="col-md-offset-5 col-md-2"><hr class="line" /></div>
	                </div>
	                <div class="col-md-8 col-md-offset-2 main-content text-center">
	                    <p class="text-uppercase">
	                        Project Details
	                    </p>
	                </div>
	                <span class="icon-down_arrow arrow-down"></span>
	            </div>
	        </div>
	    </section>


	    <section class="container-fluid lite-bg" id="portfolio" data-midnight="light">
	        <div class="row pattern">
	            <div class="container grid">
	                <div class="col-md-2 col-md-offset-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	            </div>
	            <div class="container main">
	                <div class="row">
	                    <div class="col-md-10 col-md-offset-1">

	                        <div class="tablet">
							<!-- Here starts carousel loop -->
							<?php $args = array( 'post_type' => 'projectsPost', 'posts_per_page' => -1 ); ?>
                			<?php $carouselProjects = new WP_Query( $args ); ?>
                			<?php $i=1; ?>
	                            <div class="tablet-spicers">
	                                <div class="tablet-spicer-bg"></div>
	                                <div class="tablet-spicer-sm"></div>
	                            </div>


	                            <div id="portfolio-carousel" class="carousel slide" data-interval="2000" data-ride="carousel">

	                                <div class="tablet-monitor carousel-inner">
	                                	<?php while ( $carouselProjects->have_posts() ) : ?>
	                                		<?php $carouselProjects->the_post(); ?>
		                                    <div id="mojmalitest" class="item <?php if ($i == 1) echo 'active'; ?>"
		                                    	data-title="<?php the_title() ?>"
		                                    	data-content="<?php echo esc_attr( get_the_content() ) ?>"
		                                    	data-plink="<?php the_field('project_link'); ?>"
		                                    	data-pcategory="<?php the_field('project_category'); ?>"
		                                    	data-pdate="<?php the_field('project_date'); ?>"
		                                    	data-pduration="<?php the_field('project_duration'); ?>"
		                                    	data-pshortdescription="<?php the_field('short_description') ?>"
		                                    	data-colorone="<?php the_field('color_one') ?>"
		                                    	data-colortwo="<?php the_field('color_two') ?>"
		                                    	data-colorthree="<?php the_field('color_three') ?>"
		                                    	data-colorfour="<?php the_field('color_four') ?>"
		                                    >
		                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title(); ?>">
		                                    </div>
		                                    <?php $i++; ?>
		                                <?php endwhile; ?>
		                                <?php wp_reset_query(); ?>
	                                </div>

	                                <!-- Indicators -->
	                                <ol class="carousel-indicators portfolio-indicators">
	                                    <li data-target="#portfolio-carousel" data-slide-to="0" class="active"></li>
	                                    <li data-target="#portfolio-carousel" data-slide-to="1"></li>
	                                    <li data-target="#portfolio-carousel" data-slide-to="2"></li>
	                                </ol>
	                            </div>
	                            <div class="tablet-btn">
	                            	<a id="linkToProject" target="_blank" href="#">
	                            		<span class="icon-link link-glow"></span>
	                            	</a>
	                            </div>

	                        </div>

	                    </div>

	                    <div class="col-md-8 col-md-offset-2">
	                        <div class="project-icons">
	                            <div class="project-icon-info" id="colorOne">
	                                <div class="project-icon">
	                                    <span class="glyphicon glyphicon-remove"></span>
	                                </div>
	                                <h5>223300</h5>
	                            </div><div class="project-icon-info" id="colorTwo">
	                                <div class="project-icon">
	                                    <span class="glyphicon glyphicon-remove"></span>
	                                </div>
	                                <h5>223300</h5>
	                            </div><div class="project-icon-info" id="colorThree">
	                                <div class="project-icon">
	                                    <span class="glyphicon glyphicon-remove"></span>
	                                </div>
	                                <h5>223300</h5>
	                            </div><div class="project-icon-info" id="colorFour">
	                                <div class="project-icon">
	                                    <span class="glyphicon glyphicon-remove"></span>
	                                </div>
	                                <h5>223300</h5>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-8 col-md-offset-4">
	                        <h4 class="sub-heading">This is some of</h4>
	                    </div>
	                    <div class="col-md-9 col-md-offset-3">
	                        <h1 class="headline">Our work</h1>
	                        <div class="col-md-offset-1 col-md-2"><hr class="line" /></div>
	                    </div>
	                    <div class="col-md-6 col-md-offset-4 main-content">
	                        <p id="projectContent">

	                        </p>
	                    </div>
	                    <table id="portfolioTable" class="text-uppercase col-md-9 col-md-offset-1">
	                        <tr>
	                            <td class="col-md-4" align="right">Project name:</td>
	                            <td id="projectName" class="col-md-8 addSpan"> <span class="dot">&#9679;</span></td>
	                        </tr>
	                        <tr>
	                            <td class="col-md-4" align="right">Project link:</td>
	                            <td id="projectLink" class="col-md-8 addSpan"> <span class="dot">&#9679;</span></td>
	                        </tr>
	                        <tr>
	                            <td class="col-md-4" align="right">Category:</td>
	                            <td id="projectCategory" class="col-md-8 addSpan"> <span class="dot">&#9679;</span></td>
	                        </tr>
	                        <tr>
	                            <td class="col-md-4" align="right">Date:</td>
	                            <td id="projectDate" class="col-md-8 addSpan"> <span class="dot">&#9679;</span></td>
	                        </tr>
	                        <tr>
	                            <td class="col-md-4" align="right">Duration:</td>
	                            <td id="projectDuration" class="col-md-8 addSpan"> <span class="dot">&#9679;</span></td>
	                        </tr>
	                    </table>
	                </div>
	            </div>
	        </div>
    	</section>

<?php get_footer(); ?>
