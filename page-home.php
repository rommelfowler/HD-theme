<?php
/**
 * Template Name: Home
 * @package harris-disability
 */

get_header();
?>

<!-- SLIDER -->
<?php get_template_part('inc/content','slider');?>
<div id="about" class="page-section p-110-cont " style="border-top: 10px solid #bf1e2e;">
          <div class="container">
            <!-- FEATURES -->
            <div class="col-md-8 col-lg-7">
              <div class="row">
                <?php $about_title = get_field('about_title');
                echo '<h2>' . $about_title . '</h2>';
                the_field('about_content'); ?>
              </div>
            </div>
            <div class="row">
              <!-- SKILLBAR -->
              <div class="col-md-4 mb-50 pb-40 col-lg-offset-1">
                <?php $acc_title=get_field('acc_title');
                echo '<h2>' . $acc_title . '</h2>';?>


            <!-- Accordion -->
             <dl class="toggle">
               <?php
                if( have_rows('accordion_container') ): while ( have_rows('accordion_container') ) : the_row(); ?>
                <dt><a href="#"><?php the_sub_field('acc_title'); ?></a></dt>
                <dd style="display: none;"><?php the_sub_field('acc_content'); ?></dd>
                <?php endwhile; else :
                endif; ?>
             </dl>
             <!-- End Accordion -->
              </div>
            </div>
          </div>
        </div>


<!-- background: url('wp-content/themes/harris-disability/assets/images/background/mid-bar.jpg');  -->
                <!-- APPS CAROUSEL FONT RALEWAY -->
        				<div class="page-section " style="background: #221f57" >
        					<div class="container" >
        						<div class="owl-plugin owl-3items-nav owl-carousel owl-bg-white pt-60 pb-60" >
                      <!-- OWL-ITEM -->
                      <?php $pa = new WP_Query(array('post_type'=>'pa','orderby'=>'date','order'=>'ASC'));
                      if($pa->have_posts()): while($pa->have_posts()):$pa->the_post();
                        $pa_btn = get_field('pa_btn');
                        $pa_link = get_field('pa_link');
                        $pa_text = get_field('pa_text');
                        ?>
                        <div class="owl-item" style="width: 380px;">

                        <div class="item m-bot-0 text-center" style="background:#636363; width:247px; height:410px; padding:30px; color: white; ">
                          <i class="fas <?php the_field('pa_ico'); ?> <?php  the_field('pa_ico_size');  ?>"></i>
                          <?php the_title('<h4 class="text-white">','</h4>');
                          the_content();
                          if($pa_btn):
                            echo '<a href=" ' . $pa_link . ' " target="_blank"><button type="button" class="btn btn-bg-theme-red">' . $pa_text . '</button></a>';
                          else: echo ''; endif;
                          ?>

                        </div>
                      </div>
                    <?php endwhile; else: echo ''; endif; wp_reset_query();?>

        						</div>


        					</div>
        				</div>

<div class="page-section p-110-cont">
  <div class="container">
    <div class="col-md-7">
      <h3><?php the_field('vid_title'); ?></h3>
      <div class="embed-responsive embed-responsive-16by9">
        <?php the_field('vid_main_section'); ?>
							</div>
    </div>

    <div class="col-md-4 col-lg-offset-1">
      <h4>More Videos</h4>
      <ul class="clearlist widget-posts" style="overflow:scroll;height:320px">
        <?php if( have_rows('vid_widget_section') ): while ( have_rows('vid_widget_section') ) : the_row();
        $vid_link = get_sub_field('vid_widget', false, false);
        ?>
        <li class="clearfix">
          <?php the_sub_field('vid_widget'); ?>
          <div class="widget-posts-descr2">
            <a href="<?php echo $vid_link; ?>" class="font-poppins lh-18"><?php the_sub_field('vid_title'); ?></a>
            <!-- <div class="mt-15">
                by <?php // the_sub_field('vid_author'); ?>
                <div><?php // the_sub_field('vid_date'); ?></div>
              </div> -->
            </div>
        </li>
        <hr>
      <?php endwhile; endif; wp_reset_query(); ?>


      </ul>
    </div>
  </div>

</div>


<div class="page-section p-10-cont bg-red ">
	<div class="container ta-center">
    <div class="row">
      <div class="col-md-12 ">
        <h3 class="text-white"><?php the_field('ssd_title'); ?></h3>
      </div>
    </div>
  </div>
</div>


<div class="page-section p-60-cont">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ta-center">
        <?php $testimonial_header = get_post_type_object( 'testimonials' ); ?>
        <h2><?php echo $testimonial_header->labels->singular_name; ?></h2>
      </div>
    </div>

    <!-- TESTIMONIALS CAROUSEL 3 -->
    <div class="row plr-30 pt-10 pb-50 owl-plugin fullwidth-slider" >
      <?php $testimonial = new WP_Query(array('post_type'=>'testimonials'));
      if($testimonial->have_posts()):while($testimonial->have_posts()):$testimonial->the_post(); ?>
      <!-- Slide Item 1 -->
      <div class="col-md-12">
        <div class="relative">
          <div class="row">

            <div class="col-md-12">
              <div class="ts3-author-cont">
                <!-- <div class="ts3-author-img ta-center">
                  <?php // the_post_thumbnail( 'full', array('class'=>'img-circle') ); ?>
                </div> -->
                <blockquote class="testimonial-3 text-center">
                  <?php the_content(); ?>
                </blockquote>
                <div class="ts-author-info text-center">
                  <div class="ts-name">
                    <?php the_title('<strong class="fs-theme-blue">','</strong>') ?>
                  </div>
                  <div class="ts-type"><?php the_field('add_some_stars'); ?></div>
                </div>

              </div>
            </div>


          </div>
        </div>
      </div>
    <?php endwhile; endif; wp_reset_query(); ?>


    </div>
  </div>

</div>



<div class="page-section p-60-cont" style="border-bottom: 20px solid #FFF; background: url('wp-content/themes/harris-disability/assets/images/background/awards-bg.jpg');"  data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50">
<div class="container">
  <div class="row">
    <div class="col-md-12 ta-center ">
      <h2 class="text-white pb-20"><?php the_field('awards_title'); ?></h2>
    </div>

    <div class="col-md-4 ta-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/AV.png" alt="AV`">
    </div>
    <div class="col-md-4 ta-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/AVVO.png" alt="AVVO" >
    </div>
    <div class="col-md-4 ta-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo/BBB.png" alt="BBB">
    </div>
  </div>
</div>

</div>
<!-- end of awards -->

<!-- form starts -->
<div class="page-section p-60-cont">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="fs-theme-red" >Contact Us Today For <br/> Your Free Consultation</h2>
      </div>
      <div class="col-md-6">
        <?php gravity_form( 3, false, false, false, '', false ); ?>

      </div>
    </div>
  </div>
</div>


<!-- form ends -->




<?php
get_footer();
