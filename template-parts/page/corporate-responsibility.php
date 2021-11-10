<div <?php post_class('c-page'); ?>>

<div class="c-banner-1">
    <div class="c-banner-1__page-title">
        <p><?php the_field('corporate_responsibility__section_1__page_title'); ?></p>
    </div>
    
    <div class="video-wrapper">
        <?php $image = get_field('corporate_responsibility__section_1__image');
            if( !empty( $image ) ): ?>
                <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

    <!-- <div class="box">
        <div class="target"> Target </div>
        <span>In viewport: <strong>false</strong></span>
    </div> -->

    <div class="copy-wrapper m-nomheight">
        
        <div class="copy-inner m-tickerspace">

            <div class="copy-wrapper__text m-corp-respons">
                <p>
                    <?php the_field('corporate_responsibility__section_1__right_copy'); ?>
                </p> 
            </div>
            <!-- <div class="button-wrapper">
                <a href="<?php the_field('corporate-_page__section_1__link1__url');?>" class="c-button-1">
                    <?php the_field('corporate-_page__section_1__link1__text');?>
                </a>
                <a href="<?php the_field('corporate-_page__section_1__link2__url');?>" class="c-button-1">
                    <?php the_field('corporate-_page__section_1__link2__text');?>
                </a>
            </div> -->
        </div>
    </div>
</div>



    <div class="c-banner-2">
    
        <div class="some-links" id="corporate-responsibility">

            <?php $link1 = get_field('corporate_responsibility__section_1__link_text_1'); if( !empty( $link1 ) ): ?>
            <a class="c-button-1 link selected" data-id="1">
                <?php the_field('corporate_responsibility__section_1__link_text_1');?>
            </a>
            <?php endif; ?>

            <?php $link2 = get_field('corporate_responsibility__section_1__link_text_2'); if( !empty( $link2 ) ): ?>
            <a class="c-button-1 link" data-id="2">
                <?php the_field('corporate_responsibility__section_1__link_text_2');?>
            </a>
            <?php endif; ?>

            <?php $link3 = get_field('corporate_responsibility__section_1__link_text_3'); if( !empty( $link3 ) ): ?>
            <a class="c-button-1 link" data-id="3">
                <?php the_field('corporate_responsibility__section_1__link_text_3');?>
            </a>
            <?php endif; ?>

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
