<?php /* Template Name: Consultation */ ?>

<?php get_header(); ?>

        <section class="container-fluid dark-bg" id="home" data-midnight="dark">
            <div class="row">
                <div class="container main">
                    <div class="col-md-8 col-md-offset-2 text-center clearfix">
                        <img src="<?php bloginfo('template_directory'); ?>/img/whiteKeys.png" height="40px" class="fleurDeLis">
                        <h4 class="sub-heading text-uppercase">Select a day</h4>
                        <h1 class="headline">Take Free Consultation</h1>
                        <hr class="line" />
                    </div>
                    <div class="col-md-8 col-md-offset-2 main-content text-center">
                        <p class="text-uppercase freeConsParagraph">
                            We're speaking your language! Take completely free consultations and we gonna find out why you're not reaching your goals.
                        </p>
                    </div>
                    <span class="icon-down_arrow arrow-down"></span>
                </div>
            </div>
        </section>

        <section class="container-fluid lite-bg" id="calendly" data-midnight="light">
            <div class="row pattern">
                <div class="container main">
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                            <!-- Calendly inline widget begin -->
                            <div class="calendly-inline-widget" data-url="https://calendly.com/hello-362" style="max-width:100%; height:400px; margin: 100px auto; border: 1px solid #c69e60;"></div>
                            <script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
                            <!-- Calendly inline widget end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-md-offset-1 text-right hidden-xs"><h2 class="hash-sign">#</h2></div>
                        <div class="col-md-1 col-sm-1 hidden-xs"><hr class="dark-line" /></div>
                        <div class="col-xs-12 col-sm-9 col-md-7">
                            <p>
                                Congratulations, you’re about to take the first step toward taking control of your business online. Please follow the steps below to schedule your strategy call. Be prepared to talk about your goals, and what is currently holding you back from reaching them.
                            </p>
                            <p>
                                We will give you a call at the agreed upon time. We look forward to speaking with you!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
