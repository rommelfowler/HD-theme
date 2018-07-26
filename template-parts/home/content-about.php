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
             <dl class="accordion">
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
