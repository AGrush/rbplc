




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

        <div class="copy-wrapper" data-id="observedArea">
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
                <span class="stat-wrapper__number"><p id="hp-stat3" class="<?php the_field('about_us_page__section_2__stat3__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat3__number'); ?></p><span><?php the_field('about_us_page__section_2__stat3__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat3__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat4" class="<?php the_field('about_us_page__section_2__stat4__extra_classes'); ?>"><?php the_field('about_us_page__section_2__stat4__number'); ?></p><span><?php the_field('about_us_page__section_2__stat4__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('about_us_page__section_2__stat4__text'); ?></p>
            </div>
        </div>

        <div class="some-links">
            <a href="<?php the_field('about_us_page__section_2__link1__url');?>" class="c-button-1 m-white-text">
                <?php the_field('about_us_page__section_2__link1__text');?>
            </a>

            <a href="<?php the_field('about_us_page__section_2__link2__url');?>" class="c-button-1 m-white-text">
                <?php the_field('about_us_page__section_2__link2__text');?>
            </a>

            <a href="<?php the_field('about_us_page__section_2__link3__url');?>" class="c-button-1 m-white-text">
                <?php the_field('about_us_page__section_2__link3__text');?>
            </a>
        </div>

    </div>
       
    <div class="c-text-image-banner">
        <div class="c-text-image-banner__wrapper-text">
            <p class="h-hide-s"><?php the_field('about_us_page__section_3__desktop_only_text'); ?></p>
           
            <p><?php the_field('about_us_page__section_3__desktop_and_mobile_text'); ?></p>

        </div>
        
        <div class="c-text-image-banner__wrapper-video">
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

    </div>
</div>

