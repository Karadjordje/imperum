<?php get_header(); ?>

        <section class="container-fluid dark-bg" id="home" data-midnight="dark">
            <div class="row">
                <div class="container head-container">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10  col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <h4 class="sub-heading">Tailoring</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3"">
                        <h1 class="headline">Tasteful Designs<br/>By Your Measurements</h1>
                        <hr class="line" />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3 main-content">
                                <p>
                                    <span class="hidden-min">Schedule COMPLETELY FREE consultation with our expert<br/>to help you figure out all concerns and doubts about your project.</span>We care about you and your business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <a class="btn btn-imperium btn-2" href="<?php echo site_url(); ?>/consultation/" role="button">Free consultation</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid lite-bg" id="services" data-midnight="light">
            <div class="row">
                <div class="container grids">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row grid-last-line">
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1 last-grid"><div class="one"></div></div>
                        </div>
                     </div>
                </div>
                <div class="container main">
                    <div class="col-xs-11 col-sm-10 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <h1 class="headline">Services</h1>
                        <hr class="line" />
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-3 service" title="01">
                                <h3>01</h3>
                                <h3>WEB DESIGN</h3>
                                <p>
                                    Your potential clients will love your new beautiful and responsive website with great user experience. The most important: it will MAKE SALES.
                                </p>
                            </div>
                            <div class="col-xs-3 service" title="02">
                                <h3>02</h3>
                                <h3>WEB DEVELOPMENT</h3>
                                <p>
                                    It's really important that your website is stable, secure, resistant and 100% up time. Team of experts will provide only high quality con in secured environment.
                                </p>
                            </div>
                            <div class="col-xs-3 service" title="03">
                                <h3>03</h3>
                                <h3>MAINTENANCE</h3>
                                <p>
                                    We won’t leave you when you need new features for your website. Great relationship with our clients is our primary focus, so you can get back to us with new requests any time.
                                </p>
                            </div>
                            <div class="col-xs-3 service" title="04">
                                <h3>04</h3>
                                <h3>SUPPORT</h3>
                                <p>
                                    You need help, explanation or training? Need it fast? We’re always ready to jump in. Our clients don’t wait a minute for assistance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <a class="btn btn-imperium btn-2" href="<?php echo site_url(); ?>/Videoblog/" role="button">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-10 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <h1 class="headline">What our clients say</h1>
                        <hr class="line" />
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid dark-bg" id="clients-say" data-midnight="dark">
            <div class="row">

                <div class="container main">
                    <div id="clients-carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="client-one">
                                    <div class="clients-info">
                                        <div class="clients-num">
                                            <h5 title="01">01</h5>
                                            <div class="clients-name">
                                                <h3><?php the_field('change_client_name'); ?></h3>
                                                <h4 class="sub-heading"><?php the_field('change_subtext'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="clients-img" style="background: linear-gradient( to bottom, rgba(255,255,255,0) 0%, rgba(7,11,38,.7) 100%), url(<?php the_field('change_image'); ?>) no-repeat center/cover;">
                                        </div>
                                    </div>
                                    <div class="client-text">

                                            <?php the_field('main_text'); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-one">
                                    <div class="clients-info">
                                        <div class="clients-num">
                                            <h5 title="02">02</h5>
                                            <div class="clients-name">
                                                <h3><?php the_field('change_client_name2'); ?></h3>
                                                <h4 class="sub-heading"><?php the_field('change_subtext2'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="clients-img" style="background: linear-gradient( to bottom, rgba(255,255,255,0) 0%, rgba(7,11,38,.7) 100%), url(<?php the_field('change_image2'); ?>) no-repeat center/cover;">
                                        </div>
                                    </div>
                                    <div class="client-text">

                                            <?php the_field('main_text2'); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-one">
                                    <div class="clients-info">
                                        <div class="clients-num">
                                            <h5 title="03">03</h5>
                                            <div class="clients-name">
                                                <h3><?php the_field('change_client_name3'); ?></h3>
                                                <h4 class="sub-heading"><?php the_field('change_subtext3'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="clients-img" style="background: linear-gradient( to bottom, rgba(255,255,255,0) 0%, rgba(7,11,38,.7) 100%), url(<?php the_field('change_image3'); ?>) no-repeat center/cover;">
                                        </div>
                                    </div>
                                    <div class="client-text">

                                            <?php the_field('main_text3'); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="clients-carousel-controls">
                                <a class="left carousel-control" href="#clients-carousel" role="button" data-slide="prev">
                                    <span class="icon-left_arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#clients-carousel" role="button" data-slide="next">
                                    <span class="icon-right_arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid lite-bg" id="our-work" data-midnight="light">
            <div class="row">
                <div class="container grids">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row grid-last-line">
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1 last-grid"><div class="one"></div></div>
                        </div>
                     </div>
                </div>
                <div class="container main">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10  col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <h4 class="sub-heading">This is some of</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3"">
                        <h1 class="headline">Our work</h1>
                        <hr class="line" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 checklist">
                        <div class="row">
                            <div class="col-xs-10  col-sm-9 col-xs-offset-2 col-sm-offset-3 checkbox-content" id="category-checkboxes">
                                <div class="checkboxCustom">
                                    <input disabled checked type="checkbox" name="allChb" id="allChb" data-category="all">
                                    <label for="allChb">All</label>
                                </div>
                                <div class="checkboxCustom">
                                    <input type="checkbox" name="frontendChb" id="frontendChb" data-category="frontend">
                                    <label for="frontendChb">Frontend</label>
                                </div>
                                <div class="checkboxCustom">
                                    <input type="checkbox" name="backendChb" id="backendChb" data-category="backend">
                                    <label for="backendChb">Backend</label>
                                </div>
                                <div class="checkboxCustom">
                                    <input type="checkbox" name="marketingChb" id="marketingChb" data-category="marketing">
                                    <label for="marketingChb">Marketing</label>
                                </div>
                                <div class="checkboxCustom">
                                    <input type="checkbox" name="designChb" id="designChb" data-category="design">
                                    <label for="designChb">Design</label>
                                </div>
                                <div class="checkboxCustom">
                                    <input type="checkbox" name="uncategorizedChb" id="uncategorizedChb" data-category="uncategorized">
                                    <label for="uncategorizedChb">SEO</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Here starts carousel loop -->
                    <?php $carouselLoop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
                    <?php $i=1; ?>

                    <div class="our-work-all">
                        <div class="our-work-info">
                            <div class="our-work-info-num">
                                <h5 class="postTitle" title="01">01</h5>
                            </div><div class="our-work-cat">
                                <a id="externalLink" target="_blank" href="#"><span class="icon-link link-glow"></span></a>
                                <h3>Crossroads</h3>
                                <h4 class="sub-heading">front end / wordpress</h4>
                            </div>
                        </div>

                        <div id="our-work-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php while ( $carouselLoop->have_posts() ) :

                                    // current page number - paged is 0 on the home page, we use 1 instead
                                    $_current_page  = is_paged() ?  get_query_var( 'paged', 1 ) : 1;

                                    // posts per page
                                    $_ppp           = get_query_var( 'posts_per_page', get_option( 'posts_per_page' ) );

                                    // current post index on the current page
                                    $_current_post  = $carouselLoop->current_post;

                                    // total number of found posts
                                    $_total_posts   = $carouselLoop->found_posts;

                                ?>
                                    <?php $carouselLoop->the_post(); ?>
                                    <?php
                                        $categories = get_the_category();
                                        $cat = '';
                                        if ( ! empty( $categories ) ) {
                                            $cat = esc_html( $categories[0]->name );
                                        }
                                    ?>
                                    <div
                                        class="cat-all cat-<?= strtolower($cat) ?> item <?php if ($i == 1) echo 'active'; ?>"
                                        data-title="<?php the_title() ?>"
                                        data-category="<?= strtolower($cat) ?>"
                                        data-link="<?php the_field('external_link') ?>"
                                        data-number="<?php echo $counter = $_total_posts - ( $_current_page - 1 ) * $_ppp - $_current_post -1; ?>"
                                    >
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title(); ?>">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                            </div>

                            <div class="our-work-carousel-controls">
                                <a class="left carousel-control" href="#our-work-carousel" role="button" data-slide="prev">
                                    <span class="icon-left_arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#our-work-carousel" role="button" data-slide="next">
                                    <span class="icon-right_arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators our-work-indicators">
                                <li data-target="#our-work-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#our-work-carousel" data-slide-to="1"></li>
                                <li data-target="#our-work-carousel" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid dark-bg" id="video-blog" data-midnight="dark">
            <div class="row">
                <div class="container main">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <h4 class="sub-heading">Learn more through</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <h1 class="headline">Latest Videoblogs</h1>
                        <hr class="line" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3 main-content">
                                <p class="text-uppercase">
                                    One minute videos to help you learn web design, marketing, seo and business.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-10 col-sm-12 col-md-11 col-lg-8 col-xs-offset-1 col-sm-offset-0 col-md-offset-1 col-lg-offset-2 video-blog-posts">
                        <div class="row">
                            <?php $args = array( 'post_type' => 'html5-blank', 'posts_per_page' => 3 ); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php $q = 1; ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="col-xs-6 col-sm-4 col-md-4<?= ($q < 3) ? '' : ' spec'; ?>">
                                <div class="video-blog-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="video-blog-link">
                                            <span class="icon-View-Icon"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php $q++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <a class="btn btn-imperium btn-2" href="<?php echo site_url(); ?>/Videoblog/" role="button">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid lite-bg" id="contact" data-midnight="light">
            <div class="row">
                <div class="container grids">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row grid-last-line">
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1"><div class="one"></div></div>
                            <div class="col-xs-2 col-sm-3 grid-1 last-grid"><div class="one"></div></div>
                        </div>
                     </div>
                </div>
                <div class="container main">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10  col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <h4 class="sub-heading">Feel free to contact us</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-10 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-3"">
                        <h1 class="headline">Get in touch</h1>
                        <hr class="line" />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3 main-content">

                                <?php echo do_shortcode( '[contactform_ENG]' ) ?>


                                <p>
                                    We're new raising company specialised in Web Development, making sure to provide high quality with business side of web development. So your website won't only be technicaly great but also optimized for high conversion rates and gathering new clients. <a href="<?php echo site_url(); ?>/pricing-plan/">View Pricing Plan.</a>
                                </p>

                                <ul>
                                    <li><span class="icon-Web-Icon sub-heading"></span> <a href="http://www.imperium-la.com" target="_blank">www.imperium-la.com</a></li>
                                    <li><span class="icon-Mail-Icon sub-heading"></span> <a href="mailto:hello@imperium-la.com" target="_blank">hello@imperium-la.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="row">
                            <div class="col-xs-10 col-sm-9 col-xs-offset-2 col-sm-offset-3">
                                <a class="btn btn-imperium btn-2" href="<?php echo site_url(); ?>/consultation/" role="button">Free consultation</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER MAIN -->
            </div>
        </section>

<?php get_footer(); ?>
