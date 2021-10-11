

<div <?php post_class('c-page u-margin-bottom-20'); ?>>
    <div class="c-page__content">

    <div class="c-banner-1">
        <div class="video-wrapper">
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
        <div class="copy-wrapper">
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
        <?php $image = get_field('home_section1_small_image');
        if( !empty( $image ) ): ?>
            <img class="c-banner-1__small-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>

    <div class="c-who-we-are">
        <div class="top-wrapper">
            <h1>   <?php the_field('home_page__section_2__title'); ?>   </h1>
            <p>    <?php the_field('home_page__section_2__body'); ?>    </p>
            <p>    <?php the_field('home_page__section_2__body2'); ?>    </p>
        </div>
        <div class="bottom-wrapper">
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat1"><?php the_field('home_page__section_2__stat1__number'); ?></p><span><?php the_field('home_page__section_2__stat1__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat1__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat2"><?php the_field('home_page__section_2__stat2__number'); ?></p><span><?php the_field('home_page__section_2__stat2__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat2__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat3"><?php the_field('home_page__section_2__stat3__number'); ?></p><span><?php the_field('home_page__section_2__stat3__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat3__text'); ?></p>
            </div>
            <div class="stat-wrapper">
                <span class="stat-wrapper__number"><p id="hp-stat4"><?php the_field('home_page__section_2__stat4__number'); ?></p><span><?php the_field('home_page__section_2__stat4__unit'); ?></span></span>
                <p class="stat-wrapper__text"><?php the_field('home_page__section_2__stat4__text'); ?></p>
            </div>
        </div>
    </div>
       
    <div class="c-links">
        <div class="wrapper-links">
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
        <div class="wrapper-images">
            <div class="small-images-wrapper">
                <div class="video-wrapper">
                    <?php
                        // Load value.
                        $iframe = get_field('home_page__section_3__small_square_video');

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
               
                <img src="https://place-hold.it/300x300" alt="" class="small-img">
            </div>
            <img src="https://place-hold.it/300x600" alt="" class="large-img">
        </div>  
    </div>
    </div>
</div>

