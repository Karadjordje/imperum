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
	                            <div class="col-xs-12 col-lg-10 col-lg-offset-1 video-short">
	                            	<div class="row">
	                            		<div class="video-short-img col-xs-5 col-lg-3 col-md-3">
	                            			<a href="<?php the_permalink() ?>">
	                            				<div class="featured-img featured-img-small" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
	                            					<div class="video-blog-link">
													    <span class="icon-View-Icon"></span>
													</div>
	                            				</div>
	                            			</a>
	                            		</div>
	                            		<div class="col-xs-7 col-lg-8 col-md-8 col-md-offset-1 video-short-body">
	                         				<div class="video-short-headline">
	                          	  			    <h3 class="post-num">01</h3>
		                            			<a href="<?php the_permalink() ?>">
		                            				<h4 class="post-headline text-uppercase"><?php the_title() ?></h4>
		                            			</a>
	                          				</div>
	                            		    <div class="post-body-short">
	                            		        <p><?php the_excerpt(); ?></p>
		                            		    <div class="video-short-tags-cats">
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
															      		echo $tag->name . ', ';
															    	}
															  	}
															?>
		                            		    	    </p>
		                            		    	</div>
		                            		    </div>
	                            		    </div>
	                            		</div><!-- END video-short-body -->
	                            	</div><!-- END row -->
	                            </div><!-- END VIDEO-SHORT -->
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


