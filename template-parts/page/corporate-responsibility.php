<div <?php post_class('c-page'); ?>>

    <div class="c-banner-2">
    
        <div class="c-banner-2__page-title">
            <p><?php the_field('corporate_responsibility__section_1__page_title'); ?></p>
        </div>

        <div class="video-wrapper">
            <?php
                // Load value.
                $iframe = get_field('corporate_responsibility__section_1__page_video');

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

        <div class="some-links" id="corporate-responsibility">
            <a class="c-button-1 link selected" data-id="1">
                <?php the_field('corporate_responsibility__section_1__link_text_1');?>
            </a>

            <a class="c-button-1 link" data-id="2">
                <?php the_field('corporate_responsibility__section_1__link_text_2');?>
            </a>

            <a class="c-button-1 link" data-id="3">
                <?php the_field('corporate_responsibility__section_1__link_text_3');?>
            </a>
        </div>

        <div class="some-content">
            <div class="content selected" data-id="1">
            <p><?php the_field('corporate_responsibility__section_1__link_longtext_1'); ?></p>
            </div>
            <div class="content" data-id="2">
            <p><?php the_field('corporate_responsibility__section_1__link_longtext_2'); ?></p>
            </div>
            <div class="content" data-id="3">
            <p><?php the_field('corporate_responsibility__section_1__link_longtext_3'); ?></p>
            </div>
        </div>

    </div>


</div>
