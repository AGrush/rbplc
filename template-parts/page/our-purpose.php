<div <?php post_class('c-page'); ?>>

<div class="c-banner-1">
    
        <div class="c-banner-1__page-title">
            <p><?php the_field('our_purpose_page__section_1__page_title'); ?></p>
        </div>

        <div class="video-wrapper">
            <?php $imageHpPoster = get_field('our_purpose_page__section_1__video_poster');
                if( !empty( $imageHpPoster ) ): ?>
                    <img class="c-banner-1__mobile-poster" src="<?php echo esc_url($imageHpPoster['url']); ?>" alt="<?php echo esc_attr($imageHpPoster['alt']); ?>" />
            <?php endif; ?>

            <?php
                // Load value.
                $iframe = get_field('our_purpose_page__section_1__video');

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

        <!-- <div class="box">
            <div class="target"> Target </div>
            <span>In viewport: <strong>false</strong></span>
        </div> -->

        <div class="copy-wrapper">
           
            <div class="copy-inner">
                <div class="copy-wrapper__heading">
                    <h1> 
                        <?php the_field('our_purpose_page__section_1__heading_text'); ?>
                    </h1>
                </div>
                <div class="copy-wrapper__text">
                    
                    <p>
                        <?php the_field('our_purpose_page__section_1__paragraph_text'); ?>
                    </p> 
                </div>
                <div class="button-wrapper">
                    <a href="<?php the_field('our_purpose_page__section_1__link1_address');?>" class="c-button-1">
                        <?php the_field('our_purpose_page__section_1__link1_text');?>
                    </a>
                    <a href="<?php the_field('our_purpose_page__section_1__link2_address');?>" class="c-button-1">
                        <?php the_field('our_purpose_page__section_1__link2_text');?>
                    </a>
                    <a href="<?php the_field('our_purpose_page__section_1__link3_address');?>" class="c-button-1">
                        <?php the_field('our_purpose_page__section_1__link3_text');?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="c-tiktok">
        <div data-mc-src="c0fc088c-0f30-4245-95b4-ec3cb4385752#tiktok"></div>
          

        <?php $image = get_field('our_purpose__section_2__below_tiktok_img');
        if( !empty( $image ) ): ?>
            <img class="c-tiktok__follow-us-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
                
        <script 
            src="https://cdn2.woxo.tech/a.js#60a3f2bc84b1cc0015c83ed7" 
            async data-usrc>
        </script>
    </div>
</div>