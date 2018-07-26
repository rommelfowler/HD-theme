<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package harris-disability
 */

?>



<!-- FOOTER 4 BLACK WITH WORKING HOURS -->
<footer id="footer4" class="page-section pt-20 " style="background: #bf1e2e; color: #FFF; ">
<div class="border" style="border-bottom: 20px solid #FFF; padding-bottom:20px;">
  <div class="container">
    <div class="row">

      <div class="col-md-2  col-sm-12  ">
        <?php dynamic_sidebar( 'footer-col-1' ); ?>

      </div>

      <div class="col-md-6 col-md-offset-1 col-sm-12">
        <h4 class="text-white"><strong>Quick Links</strong></h4>
          <?php
          $args = array(
            'theme_location'=>'menu-2',
            'container'=>'div',
            'container_class'=>'',
            'menu_class'=>'inline-list links-list a-text-cont a-text-main-cont font-poppins light padding-l-none',

          );

          wp_nav_menu($args);
          ?>

      </div>

      <div class="col-md-3 col-sm-12">
        <?php dynamic_sidebar( 'footer-col-3' ); ?>

      </div>

    </div>

  </div>
</div>

<div class="sub-footer p-50-cont " style="background:#262262">
  <div class="pb-10 ta-center">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/logo-white.png" alt="">
  </div>

</div>
<div class="sub-footer p-10-cont " style="background:#FFF">
  <div class="ta-center ">
    <p><a class="fs-theme-blue" href="http://harrisd.wpengine.com/privacy-policy/" target="_blank">Privacy Policy</a> <span style="color: #b71c29">|</span> <a class="fs-theme-blue" href="http://harrisd.wpengine.com/disclaimer/" target="_blank">Disclaimer</a> </p>
  </div>
</div>
</footer>


				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="fas fa-angle-up"></span></a>
        </p>

			</div><!-- End BG -->
		</div><!-- End wrap -->
<?php wp_footer(); ?>
<!-- JS begin -->

		<!-- jQuery  -->
		<script  src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>

		<!-- MAGNIFIC POPUP -->
		<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.min.js"></script>

    <!-- PORTFOLIO SCRIPTS -->
    <script  src="<?php bloginfo('template_directory');?>/assets/js/isotope.pkgd.min.js"></script>
    <script  src="<?php bloginfo('template_directory');?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script  src="<?php bloginfo('template_directory');?>/assets/js/masonry.pkgd.min.js"></script>

    <!-- APPEAR -->
    <script  src="<?php bloginfo('template_directory');?>/assets/js/jquery.appear.js"></script>

    <!-- OWL CAROUSEL -->
    <script  src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>

    <!-- JQUERY TWEETS -->
		<script src="<?php bloginfo('template_directory');?>/assets/js/twitter/jquery.tweet.js"></script>

    <!-- MAIN SCRIPT -->
		<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

		<!-- REVOSLIDER SCRIPTS  -->
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/jquery.themepunch.tools.min.js" >
    </script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/jquery.themepunch.revolution.min.js" >
    </script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
      The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.actions.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.carousel.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.kenburn.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" >
    </script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.migration.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.navigation.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.parallax.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.slideanims.min.js" ></script>
    <script src="<?php bloginfo('template_directory');?>/assets/revo-slider/js/extensions/revolution.extension.video.min.js" ></script>

    <!-- SLIDER REVOLUTION INITIALIZATION carousel  -->
    <script>
      jQuery(document).ready(function() {

        jQuery("#rev_slider_280_1").show().revolution({
          sliderType: "standard",
          jsFileLocation: "assets/revo-slider/js/",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 50,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
              style: "hermes",
              enable: true,
              hide_onmobile: true,
              hide_onleave: true,
              tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 0,
                v_offset: 0
              }
            },
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [600, 450, 400, 400],
          lazyType: "none",
          parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "spinner3",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });

      }); /*ready*/
    </script>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 4467721;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->
<!-- JS end -->

	</body>
</html>
