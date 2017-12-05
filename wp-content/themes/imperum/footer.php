
    <!-- Do not load this HTML on pricing plan page (HTML for footer) -->
    <?php if ( !is_page('pricing-plan') ) : ?>
        <div class="footer">
	        <p class="copyright">
	            MMXVII copyright Imperium.
	        </p>
	    </div>
        <section class="container-fluid dark-bg" id="small-footer" data-midnight="dark">
            <div class="row">

                <div class="container main">
                    <div class="footer-content">
                        <span class="icon-Logo logo"></span>
                        <div class="f-soc-copyright">
                            <div class="soc-footer">
                                <p>Follow us:</p>
                                <ul class="footer-icons">
                                    <li><a href="https://www.facebook.com/imperium.mmxvii" target="_blank"><span class="icon icon-Facebook-Icon"></span></a></li>
                                    <li><a href="https://www.behance.net/imperiumine560" target="_blank"><span class="icon icon-Behance-Icon"></span></a></li>
                                    <li><a href="https://www.instagram.com/imperium_studio/" target="_blank"><span class="icon icon-Instagram-Icon"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/imperiumwebstudio" target="_blank" class="special"><span class="icon icon-Linked-In-Icon"></span></a></li>
                                </ul>
                            </div>
                            <h5 class="copyright text-uppercase">
                                MMXVII copyright Imperium.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

		<?php wp_footer(); ?>


		<!-- GOOGLE analytics -->
		<!-- <script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108481343-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108481343-1');
		</script>
		<!-- /GOOGLE analytics -->

        <?php include 'facebook-widget.php'; ?>
	</body>
</html>
