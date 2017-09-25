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
	                        <h3 title="58">58</h3>
	                        <div class="checkboxCustom">
	                            <input type="checkbox" name="uxWebChb" id="uxWebChb">
	                            <label for="uxWebChb">UX WEB TACTICS</label>
	                        </div>
	                    </div><div class="categories">
	                        <h3 title="58">58</h3>
	                        <div class="checkboxCustom">
	                            <input type="checkbox" name="marketingChb" id="marketingChb">
	                            <label for="marketingChb">MARKETING TACTICS</label>
	                        </div>
	                    </div><div class="categories">
	                        <h3 title="58">58</h3>
	                        <div class="checkboxCustom">
	                            <input type="checkbox" name="outherChb" id="outherChb">
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
	                            <!-- ONE POST -->
	                            <?php
	                            	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	                            	$args = array(
		                            	'post_type' => 'html5-blank',
		                            	'posts_per_page' => 4,
		                            	'paged' => $paged
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

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">EAT PREPARED MEAL</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">EAT PREPARED MEAL</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">EAT PREPARED MEAL</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">EAT PREPARED MEAL</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="paginations clearfix">
	                            <ul class="pagination">
	                                <li><a href=""><span class="icon-left_arrow"></span></a></li>
	                                <li><a href=""><span class="icon-left_arrow"></span></a></li>
	                                <li class="active"><a href="">1</a></li>
	                                <li><a href="">2</a></li>
	                                <li><a href="">3</a></li>
	                                <li><a href=""><span class="icon-right_arrow"></span></a></li>
	                                <li><a href=""><span class="icon-right_arrow"></span></a></li>
	                            </ul>
	                        </div>

	                    </div>
	                    <div role="tabpanel" class="tab-pane" id="most-popular">
	                        <div class="vb-posts clearfix">
	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">Web Design speed art - monter</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">Web Design speed art - monter</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">Web Design speed art - monter</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>

	                            <!-- ONE POST -->
	                            <div class="col-md-3 col-md-offset-1">
	                                <div class="featured-img featured-img-small" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/video-blog.jpg');"></div>
	                            </div>
	                            <div class="col-md-1 post-num">
	                                <h3>01</h3>
	                            </div>
	                            <div class="col-md-1">
	                                <hr class="dark-line" />
	                            </div>
	                            <div class="col-md-5">
	                                <h4 class="post-headline text-uppercase">Web Design speed art - monter</h4>
	                                <div class="post-body-short">
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure atque quasi eum, reprehenderit nam odit repellat dicta possimus modi, ducimus placeat magni quo similique quis iste minus -</p>
	                                </div>
	                                <div class="subject">
	                                    <p>Marketing tactics</p>
	                                </div><div class="tags">
	                                    <p>Tag1, Tag2, Tag3, Tag4</p>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="paginates clearfix">
	                            <span class="icon-left_arrow"></span>
	                            <span class="icon-left_arrow"></span>
	                            <span>1</span>
	                            <span class="icon-right_arrow"></span>
	                            <span class="icon-right_arrow"></span>
	                        </div>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

<?php get_footer(); ?>
