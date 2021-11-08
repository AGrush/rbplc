




<div <?php post_class('c-page'); ?>>
    <div class="c-page__content">

    <div class="c-banner-1 m-fullwidth-desktop">

        <div class="c-banner-1__page-title">
            <p><?php the_field('about_us_page__section_1__page_title'); ?></p>
        </div>

        <div class="video-wrapper">
                
                <?php
                $detect = new Mobile_Detect;
                if ( $detect->isMobile() && !$detect->isTablet() ) {
                    $imageMobile = get_field('about_us_page__section_1__video_poster_mobile');
                    if( !empty( $imageMobile ) ): 
                ?>
                        <img class="c-banner-1__mobile-poster" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>" />
                <?php
                    endif; 
                } 
                else {
                ?>

                <?php
                    $imageDesktop = get_field('about_us_page__section_1__video_poster_desktop');
                    if( !empty( $imageDesktop ) ): 
                ?>
                        <img class="c-banner-1__desktop-poster" src="<?php echo esc_url($imageDesktop['url']); ?>" alt="<?php echo esc_attr($imageDesktop['alt']); ?>" />
                <?php
                    endif; 
                } 
                ?>
               

            <?php
                // Any mobile device (phones or tablets).
                if ( $detect->isMobile() && !$detect->isTablet() ) {
                    $detect = new Mobile_Detect;
                   
                    // Load value.
                    $iframe = get_field('about_us_page__section_1__video_mobile');

                    // Use preg_match to find iframe src.
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // Add extra parameters to src and replcae HTML.
                    $params = array(
                        'controls'  => 0,
                        'hd'        => 1,
                        'autoplay'  => 1,
                        'muted'     => 1,
                        'autohide'  => 1,
                        'loop'      => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // Display customized HTML.
                    echo $iframe;
                } else {
                    // Load value.
                    $iframe = get_field('about_us_page__section_1__video_desktop');

                    // Use preg_match to find iframe src.
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // Add extra parameters to src and replcae HTML.
                    $params = array(
                        'controls'  => 0,
                        'hd'        => 1,
                        'autoplay'  => 1,
                        'muted'     => 1,
                        'autohide'  => 1,
                        'loop'      => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // Display customized HTML.
                    echo $iframe;
                }
               
            ?>
        </div>

        <div class="copy-wrapper m-justify-start" data-id="observedArea">
            <div class="copy-inner">
                <div class="copy-wrapper__text">
                    <p>
                        <?php the_field('about_us_page__section_1__mobile_only_text'); ?>
                    </p> 
                </div>
            </div>
        </div>

      

    </div>

    <div class="c-who-we-are">
        <!-- <div class="top-wrapper">
            <h1>      </h1>
            <p>        </p>
            <p>        </p>
        </div> -->
        <div class="bottom-wrapper" data-id="io1">
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat1" class="<?php the_field('about_us_page__section_2__stat1__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat1__number'); ?></p><span><?php the_field('about_us_page__section_2__stat1__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat1__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat2" class="<?php the_field('about_us_page__section_2__stat2__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat2__number'); ?></p><span><?php the_field('about_us_page__section_2__stat2__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat2__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat3" class="<?php the_field('about_us_page__section_2__stat3__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat3__number'); ?></p><span><?php the_field('about_us_page__section_2__stat3___unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat3__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat4" class="<?php the_field('about_us_page__section_2__stat4__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat4__number'); ?></p><span><?php the_field('about_us_page__section_2__stat4__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat4__text'); ?></p>
            </div>
        </div>

        <div class="some-links">
            <?php $link1 = get_field('about_us_page__section_2__link1__text'); if( !empty( $link1 ) ): ?>
                <a href="<?php the_field('about_us_page__section_2__link1__url');?>" class="c-button-1 m-white-text">
                    <?php the_field('about_us_page__section_2__link1__text');?>
                </a>
            <?php endif; ?>

            <?php $link2 = get_field('about_us_page__section_2__link2__text'); if( !empty( $link2 ) ): ?>
                <a href="<?php the_field('about_us_page__section_2__link2__url');?>" class="c-button-1 m-white-text">
                    <?php the_field('about_us_page__section_2__link2__text');?>
                </a>
            <?php endif; ?>

            <?php $link3 = get_field('about_us_page__section_2__link3__text'); if( !empty( $link3 ) ): ?>
                <a href="<?php the_field('about_us_page__section_2__link3__url');?>" class="c-button-1 m-white-text">
                    <?php the_field('about_us_page__section_2__link3__text');?>
                </a>
            <?php endif; ?>
        </div>

    </div>
       
    <div class="c-text-image-banner">
        <div class="c-text-image-banner__wrapper-text">
            <p class="h-hide-s"><?php the_field('about_us_page__section_3__desktop_only_text'); ?></p>
           
            <p><?php the_field('about_us_page__section_3__desktop_and_mobile_text'); ?></p>
        </div>
        
        <div class="c-text-image-banner__wrapper-video">
            <?php $image2auPoster = get_field('about_us_page__section_3__video_poster');
                if( !empty( $image2auPoster ) ): ?>
                    <img class="c-links__video-poster" src="<?php echo esc_url($image2auPoster['url']); ?>" alt="<?php echo esc_attr($image2auPoster['alt']); ?>" />
            <?php endif; ?>

            <div class="iframe-wrapper">
                <?php
                    // Load value.
                    $iframe = get_field('about_us_page__section_3__video');

                    // Use preg_match to find iframe src.
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // Add extra parameters to src and replcae HTML.
                    $params = array(
                        'controls'  => 0,
                        'hd'        => 1,
                        'autoplay'  => 1,
                        'muted'      => 1,
                        'autohide'  => 1,
                        'loop'      => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0" class="lazyload"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                    $iframe = preg_replace('~<iframe[^>]*\K(?=src)~i','data-',$iframe);
                    // Display customized HTML.
                    echo $iframe;
                ?>
            </div>
        </div>  
    </div>

    <div class="c-stockists">
        <div class="c-stockists__heading">
            <h2>Stockists</h2>
        </div>
        <div class="c-stockists__wrapper">
            <?php $stockist_img_1 = get_field('about_us_page__section_4__stockist_img_1'); if(!empty($stockist_img_1)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_1['url']); ?>" alt="<?php echo esc_attr($stockist_img_1['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_2 = get_field('about_us_page__section_4__stockist_img_2'); if(!empty($stockist_img_2)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_2['url']); ?>" alt="<?php echo esc_attr($stockist_img_2['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_3 = get_field('about_us_page__section_4__stockist_img_3'); if(!empty($stockist_img_3)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_3['url']); ?>" alt="<?php echo esc_attr($stockist_img_3['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_4 = get_field('about_us_page__section_4__stockist_img_4'); if(!empty($stockist_img_4)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_4['url']); ?>" alt="<?php echo esc_attr($stockist_img_4['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_5 = get_field('about_us_page__section_4__stockist_img_5'); if(!empty($stockist_img_5)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_5['url']); ?>" alt="<?php echo esc_attr($stockist_img_5['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_6 = get_field('about_us_page__section_4__stockist_img_6'); if(!empty($stockist_img_6)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_6['url']); ?>" alt="<?php echo esc_attr($stockist_img_6['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_7 = get_field('about_us_page__section_4__stockist_img_7'); if(!empty($stockist_img_7)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_7['url']); ?>" alt="<?php echo esc_attr($stockist_img_7['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_8 = get_field('about_us_page__section_4__stockist_img_8'); if(!empty($stockist_img_8)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_8['url']); ?>" alt="<?php echo esc_attr($stockist_img_8['alt']); ?>" />
                </div>
            <?php endif; ?>
            
            <?php $stockist_img_9 = get_field('about_us_page__section_4__stockist_img_9'); if(!empty($stockist_img_9)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_9['url']); ?>" alt="<?php echo esc_attr($stockist_img_9['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_10 = get_field('about_us_page__section_4__stockist_img_10'); if(!empty($stockist_img_10)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_10['url']); ?>" alt="<?php echo esc_attr($stockist_img_10['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_11 = get_field('about_us_page__section_4__stockist_img_11'); if(!empty($stockist_img_11)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_11['url']); ?>" alt="<?php echo esc_attr($stockist_img_11['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_12 = get_field('about_us_page__section_4__stockist_img_12'); if(!empty($stockist_img_12)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_12['url']); ?>" alt="<?php echo esc_attr($stockist_img_12['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_13 = get_field('about_us_page__section_4__stockist_img_13'); if(!empty($stockist_img_13)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_13['url']); ?>" alt="<?php echo esc_attr($stockist_img_13['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_14 = get_field('about_us_page__section_4__stockist_img_14'); if(!empty($stockist_img_14)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_14['url']); ?>" alt="<?php echo esc_attr($stockist_img_14['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_15 = get_field('about_us_page__section_4__stockist_img_15'); if(!empty($stockist_img_15)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_15['url']); ?>" alt="<?php echo esc_attr($stockist_img_15['alt']); ?>" />
                </div>
            <?php endif; ?>
            <?php $stockist_img_16 = get_field('about_us_page__section_4__stockist_img_16'); if(!empty($stockist_img_16)): ?>
                <div class="c-stockists__img-wrapper">
                    <img class="c-stockists__img" src="<?php echo esc_url($stockist_img_16['url']); ?>" alt="<?php echo esc_attr($stockist_img_16['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="c-we-fight">
        <div class="c-we-fight__video-wrapper">
            <?php
                // Load value.
                $iframe = get_field('about_us_page__section_5__heading_video');

                // Use preg_match to find iframe src.
                preg_match('/src="(.+?)"/', $iframe, $matches);
                $src = $matches[1];

                // Add extra parameters to src and replcae HTML.
                $params = array(
                    'controls'  => 0,
                    'hd'        => 1,
                    'autoplay'  => 1,
                    'muted'     => 1,
                    'autohide'  => 1,
                    'loop'      => 1
                );
                $new_src = add_query_arg($params, $src);
                $iframe = str_replace($src, $new_src, $iframe);

                // Add extra attributes to iframe HTML.
                $attributes = 'frameborder="0"';
                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                // Display customized HTML.
                echo $iframe;
            ?>
        </div>

        <div class="c-we-fight__body-copy">
            <p><?php the_field('about_us_page__section_5__body_copy'); ?></p>
        </div>

        <div class="c-tiktok">
            <div data-mc-src="c0fc088c-0f30-4245-95b4-ec3cb4385752#tiktok"></div>
            
            <?php $image = get_field('about_us_page__section_5__below_tiktok_img');
            if( !empty( $image ) ): ?>
                <img class="c-tiktok__follow-us-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
                    
            <script 
                src="https://cdn2.woxo.tech/a.js#60a3f2bc84b1cc0015c83ed7" 
                async data-usrc>
            </script>
        </div>
    </div>









    </div>
</div>

