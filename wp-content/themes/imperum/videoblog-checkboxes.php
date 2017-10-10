<?php /* Template Name: video-checkboxes */ ?>

								<!-- get_query_var allows us to change query directly in URL we use it for category_name -->
								<?php
	                            	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	                            	$args = array(
		                            	'post_type' => 'html5-blank',
		                            	'posts_per_page' => 5,
		                            	'paged' => $paged,
		                            	'category_name' => get_query_var('category_name')
	                            	);
	                            ?>
                            	<?php $loop = new WP_Query( $args ); ?>
                            	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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

								<?php if ($loop->max_num_pages > 1) { // check if the max number of pages is greater than 1
									$nextUrl = get_next_posts_page_link();
									$prevUrl = get_previous_posts_page_link();
								?>
	                            <div class="paginations clearfix">
		                            <ul class="pagination">
		                                <li><a href="<?php echo esc_url( $prevUrl ); ?>"><span class="icon-left_arrow"></span></a></li>
		                                <!-- pagination here -->
		                                <?php
									      if (function_exists(custom_pagination)) {
									        custom_pagination($loop->max_num_pages,"",$paged);
									      }
									    ?>
		                                <li><a href="<?php echo esc_url( $nextUrl ); ?>"><span class="icon-right_arrow"></span></a></li>
		                            </ul>
		                        </div>
		                        <?php } ?>


