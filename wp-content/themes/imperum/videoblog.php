<?php /* Template Name: Videoblog */ ?>

<?php get_header(); ?>

		<section class="container-fluid dark-bg" id="home" data-midnight="dark">
	        <div class="row">
	            <div class="container main">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <img src="<?php bloginfo('template_directory'); ?>/img/whiteKeys.png">
	                    <h4 class="sub-heading text-uppercase">Welcome to our</h4>
	                    <h1 class="headline text-uppercase">Videoblog page</h1>
	                    <div class="col-md-offset-5 col-md-2"><hr class="line" /></div>
	                </div>
	                <div class="col-md-6 col-md-offset-3 vb-posts-info">
	                    <div class="categories">
	                    	<?php
	                    		$cat_count_web = get_category( '8' );
	                    		$cat_count_marketing = get_category( '3' );
	                    		$cat_count_other = get_category( '12');
	                    	?>
	                        <h3 title="<?php echo $cat_count_web->count; ?>">
	                        	<?php echo $cat_count_web->count; ?>
	                        </h3>
	                        <div class="checkboxCustom">
	                            <input checked type="checkbox" name="uxWebChb" id="uxWebChb">
	                            <label for="uxWebChb">UX WEB TACTICS</label>
	                        </div>
	                    </div><div class="categories">
	                        <h3 title="<?php echo $cat_count_marketing->count; ?>">
	                        	<?php echo $cat_count_marketing->count; ?>
	                        </h3>
	                        <div class="checkboxCustom">
	                            <input checked type="checkbox" name="marketingChb" id="marketingChb">
	                            <label for="marketingChb">MARKETING TACTICS</label>
	                        </div>
	                    </div><div class="categories">
	                        <h3 title="<?php echo $cat_count_other->count; ?>">
	                        	<?php echo $cat_count_other->count; ?>
	                        </h3>
	                        <div class="checkboxCustom">
	                            <input checked type="checkbox" name="outherChb" id="outherChb">
	                            <label for="outherChb">OTHER TACTICS</label>
	                        </div>
	                    </div>
	                </div>
	                <ul class="custom-tabs" role="tablist">
	                    <li role="presentation" class="active">
	                        <a href="#latest" aria-controls="latest" role="tab" data-toggle="tab">LATEST</a>
	                    </li><li role="presentation">
	                        <a href="#most-popular" aria-controls="most-popular" role="tab" data-toggle="tab">MOST POPULAR</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </section>

	    <section class="container-fluid lite-bg" id="vblog-page" data-midnight="light">
	        <div class="row pattern">
	            <div class="container grid">
	                <div class="col-md-2 col-md-offset-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	                <div class="col-md-2"><div class="one"></div></div>
	            </div>
	            <!-- Nav tabs -->
	            <div class="container main">
	                <div class="tab-content">
	                    <div role="tabpanel" class="tab-pane active" id="latest">
	                        <div class="vb-posts clearfix">
	                        	<?php include('videoblog-checkboxes.php'); ?>
	                        </div>
	                    </div>

	                    <div role="tabpanel" class="tab-pane" id="most-popular">

							<div class="vb-posts clearfix">
	                            <?php
	                            	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	                            	$args = array(
		                            	'post_type' => 'html5-blank',
		                            	'posts_per_page' => 5,
		                            	'paged' => $paged,
		                            	'meta_key' => 'wpb_post_views_count',
		                            	'orderby' => 'meta_value_num',
		                            	'order' => 'DESC'
	                            	);
	                            ?>
                            	<?php $popularpost = new WP_Query( $args ); ?>
                            	<?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                            	<a class="post-headline text-uppercase" href="<?php the_permalink() ?>">
	                            		<h4 class="post-headline text-uppercase"><?php the_title() ?></h4>
	                            	</a>
	                                <div class="post-body-short">
	                                    <p><?php the_excerpt(); ?></p>
	                                </div>
	                                <div class="subject">
	                                    <p>
	                                    	<?php foreach ((get_the_category()) as $category) {
				                    			echo $category->cat_name . ' ';
				                    		} ?>
	                                    </p>
	                                </div><div class="tags">
	                                    <p>
		                                   	<?php
											  	$posttags = get_the_tags();
											  	if ($posttags) {
											    	foreach($posttags as $tag) {
											      		echo $tag->name . ', ';
											    	}
											  	}
											?>
	                                    </p>
	                                </div>
	                            </div>
	                            <?php endwhile; ?>

	                            <?php if ($popularpost->max_num_pages > 1) { // check if the max number of pages is greater than 1
									$nextUrl = get_next_posts_page_link();
									$prevUrl = get_previous_posts_page_link();
								?>
	                            <div class="paginations clearfix">
		                            <ul class="pagination">
		                                <li><a href="<?php echo esc_url( $prevUrl ); ?>"><span class="icon-left_arrow"></span></a></li>
		                                <!-- pagination here -->
		                                <?php
									      if (function_exists(custom_pagination)) {
									        custom_pagination($popularpost->max_num_pages,"",$paged);
									      }
									    ?>
		                                <li><a href="<?php echo esc_url( $nextUrl ); ?>"><span class="icon-right_arrow"></span></a></li>
		                            </ul>
		                        </div>
		                        <?php } ?>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>
	    </section>

<?php get_footer(); ?>