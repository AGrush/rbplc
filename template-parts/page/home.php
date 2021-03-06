<div <?php post_class('c-page'); ?>>
    <div class="c-page__content">

    <div class="c-banner-1">
        <div class="video-wrapper">

            <?php $imageHpPoster = get_field('home_page__section_1__video_poster');
                if( !empty( $imageHpPoster ) ): ?>
                    <img class="c-banner-1__mobile-poster" src="<?php echo esc_url($imageHpPoster['url']); ?>" alt="<?php echo esc_attr($imageHpPoster['alt']); ?>" />
            <?php endif; ?>
            <?php
                // Load value.
                $iframe = get_field('home_top_video');

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
                $attributes = 'frameborder="0"';
                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                // Display customized HTML.
                echo $iframe;
            ?>
        </div>

        <!-- <div class="box">
            <div class="target"> Target </div>
            <span>In viewport: <strong>false</strong></span>
        </div> -->

        <div class="copy-wrapper" data-id="observedArea">
           
           
            <div class="copy-inner">
                <div class="copy-wrapper__heading">
                    <h1> 
                        <?php the_field('home_heading_text'); ?>
                    </h1>
                </div>
                <div class="copy-wrapper__text">
                    
                    <p>
                        <?php the_field('home_paragraph_text'); ?>
                    </p> 
                    <p>
                        <?php the_field('home_paragraph_text2'); ?>
                    </p> 
                </div>
                <a href="<?php the_field('home_page__section_1__link_address');?>" class="c-button-1">
                    <?php the_field('home_page__section_1__link_text');?>
                </a>
            </div>
           
        </div>

        <div class="text-roller-wrapper">
            <div class="text-roller" id="my-text-roller">
                <span><?php the_field('home_page__section_1__scrolling_text_marquee'); ?> &nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
        <?php $image = get_field('home_section1_small_image');
        if( !empty( $image ) ): ?>
            <img class="c-banner-1__small-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>

    <div class="c-who-we-are">
        <div class="top-wrapper">
            <h1>   <?php the_field('home_page__section_2__title'); ?>   </h1>
            <p>    <?php the_field('home_page__section_2__body'); ?>    </p>
        </div>
        <div class="bottom-wrapper" data-id="io1">
            <?php $stat1 = get_field('home_page__section_2__stat1__number'); if( !empty( $stat1 ) ): ?>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat1" class="<?php the_field('home_page__section_2__stat1__extra_classes'); ?>"><?php the_field('home_page__section_2__stat1__number'); ?></p><span><?php the_field('home_page__section_2__stat1__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat1__text'); ?></p>
            </div>
            <?php endif; ?>
            <?php $stat2 = get_field('home_page__section_2__stat2__number'); if( !empty( $stat2 ) ): ?>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p>??</p><p id="hp-stat2" class="<?php the_field('home_page__section_2__stat2__extra_classes'); ?>"><?php the_field('home_page__section_2__stat2__number'); ?></p><span><?php the_field('home_page__section_2__stat2__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat2__text'); ?></p>
            </div>
            <?php endif; ?>
            <?php $stat3 = get_field('home_page__section_2__stat3__number'); if( !empty( $stat3 ) ): ?>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat3" class="<?php the_field('home_page__section_2__stat3__extra_classes'); ?>"><?php the_field('home_page__section_2__stat3__number'); ?></p><span><?php the_field('home_page__section_2__stat3__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat3__text'); ?></p>
            </div>
            <?php endif; ?>
            <?php $stat4 = get_field('home_page__section_2__stat4__number'); if( !empty( $stat4 ) ): ?>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat4" class="<?php the_field('home_page__section_2__stat4__extra_classes'); ?>"><?php the_field('home_page__section_2__stat4__number'); ?></p><span><?php the_field('home_page__section_2__stat4__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat4__text'); ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
       
    <div class="c-links">
        <div class="c-links__wrapper-links">

            <?php $image = get_field('home_page__section_3__squiggle1');
            if( !empty( $image ) ): ?>
                <img class="c-links__wrapper-links__small-img1 lazyload" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <?php $image = get_field('home_page__section_3__squiggle2');
            if( !empty( $image ) ): ?>
                <img class="c-links__wrapper-links__small-img2 lazyload" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <a href="<?php the_field('home_page__section_3__link1__address');?>" class="c-button-1">
                <?php the_field('home_page__section_3__link1__text');?>
            </a>
            <a href="<?php the_field('home_page__section_3__link2__address');?>" class="c-button-1">
                <?php the_field('home_page__section_3__link2__text');?>
            </a>
            <a href="<?php the_field('home_page__section_3__link3__address');?>" class="c-button-1">
                <?php the_field('home_page__section_3__link3__text');?>
            </a>
            <a href="<?php the_field('home_page__section_3__link4__address');?>" class="c-button-1">
                <?php the_field('home_page__section_3__link4__text');?>
            </a>
            <a href="<?php the_field('home_page__section_3__link5__address');?>" class="c-button-1">
                <?php the_field('home_page__section_3__link5__text');?>
            </a>

        </div>
        
        <div class="c-links__wrapper-video">
            <?php $image2HpPoster = get_field('home_page__section_3__square_video_poster');
                if( !empty( $image2HpPoster ) ): ?>
                    <img class="c-links__video-poster" src="<?php echo esc_url($image2HpPoster['url']); ?>" alt="<?php echo esc_attr($image2HpPoster['alt']); ?>" />
            <?php endif; ?>

            <div class="iframe-wrapper">
                <?php
                    // Load value.
                    $iframe = get_field('home_page__section_3__square_video');

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

