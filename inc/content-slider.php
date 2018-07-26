<!-- SLIDER Revo Hero 4 -->
<div class="relative indent-header-top-bar">

    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_280_1_wrapper" style="border-top: 10px solid #bf1e2e;margin:0px auto;background-color:#101010;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
        <div class="rev_slider fullwidthabanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">

            <ul>
              <?php
              $slider = new WP_Query(array('post_type'=>'slider','post_per_page'=>'5'));
              if($slider->have_posts()):while($slider->have_posts()):$slider->the_post();
              $rand = rand(0,9999);
              $slider_img = get_field('slider_img');
              $btn_choice = get_field('btn_choice');
              $slider_vid = get_field('slider_vid');
              ?>
                <!-- SLIDE  -->
                <li data-index="rs-<?php echo $rand; ?>" data-transition="slideleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"

                  data-thumb="<?php echo $slider_img[url];  ?>"
                  data-rotate="0"
                  data-saveperformance="off"
                  data-title="<?php the_title(); ?>"
                  data-description="">
                  <?php if(empty($slider_vid)): ?>
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $slider_img[url];  ?>" alt="<?php echo $slider_img[alt];  ?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                  <?php else: echo $slider_vid; endif; ?>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-1" style="z-index: 8; white-space: nowrap;"
                    data-fontsize="['55','50','50','33']"

                    data-height="none"
                    data-lineheight="['102','82','74','64']"
                    data-responsive_offset="on"
                    data-splitin="none"
                    data-splitout="none"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                    data-whitespace="nowrap"
                    data-width="none"
                    data-x="['left','left','center','center']"
                    data-hoffset="['40','40','0','0']"
                    data-y="['center','center','center','center']"
                    data-voffset="['-50','-50','-35','-33']"></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-2" style="z-index: 8; white-space: nowrap;"
                    data-visibility="['on','on','off','off']"
                    data-fontsize="['16','16','16','16']"
                    data-fontweight="300"
                    data-height="none"
                    data-lineheight="['24','24','24','24']"
                    data-responsive_offset="on"
                    data-splitin="none"
                    data-splitout="none"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                    data-whitespace="nowrap"
                    data-width="none"
                    data-x="['left','left','center','center']"
                    data-hoffset="['40','40','0','0']"
                    data-y="['center','center','center','center']"
                    data-voffset="['-50','-50','-35','-33']">
                      <span class="text-sm-center" style="z-index:10;"><?php the_field('slider_content'); ?></span>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption rs-parallaxlevel-6"
                       id="slide-898-layer-3"
                       data-x="['left','left','center','center']"
                       data-hoffset="['40','40','0','0']"
                       data-y="['center','center','center','center']"
                       data-voffset="['90','115','40',40']"
                      data-width="none"
                      data-height="none"
                      data-whitespace="nowrap"

                      data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                      data-splitin="none"
                      data-splitout="none"
                      data-responsive_offset="on"
                      data-responsive="off"

                      style="z-index: 8; white-space: nowrap;outline:none;">
                      <?php if($btn_choice): ?>
                        <a style="z-index:10;" class="tp-button1 button medium full-rounded hover-dark white" href="<?php the_field('slider_button_link_one'); ?>"><?php the_field('slider_button_one'); ?></a>
                        <a style="z-index:10;" class="tp-button1 button medium full-rounded thin white ml-20" href="<?php the_field('slider_button_link_two'); ?>"><?php the_field('button_text_two'); ?></a>
                      <?php endif; ?>
                    </div>


                </li>
              <?php endwhile; endif; wp_reset_query(); ?>
                                        <!-- SLIDE  -->
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

</div>
