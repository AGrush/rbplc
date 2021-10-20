<div <?php post_class('c-page'); ?>>

<div class="c-banner-1">

        <div class="c-banner-1__page-title">
            <p><?php the_field('our_strategy_page__section_1__page_title'); ?></p>
        </div>
        
        <div class="video-wrapper">
            <?php $image = get_field('our_strategy_page__section_1__image');
                if( !empty( $image ) ): ?>
                    <img class="c-banner-1__mobile-poster" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>

        <!-- <div class="box">
            <div class="target"> Target </div>
            <span>In viewport: <strong>false</strong></span>
        </div> -->

        <div class="copy-wrapper">
           
            <div class="copy-inner">

                <div class="copy-wrapper__text">
                    <p>
                        <?php the_field('our_strategy_page__section_1__text'); ?>
                    </p> 
                </div>
                <div class="button-wrapper">
                    <a href="<?php the_field('our_strategy_page__section_1__link1__url');?>" class="c-button-1">
                        <?php the_field('our_strategy_page__section_1__link1__text');?>
                    </a>
                    <a href="<?php the_field('our_strategy_page__section_1__link2__url');?>" class="c-button-1">
                        <?php the_field('our_strategy_page__section_1__link2__text');?>
                    </a>
                    <a href="<?php the_field('our_strategy_page__section_1__link3__url');?>" class="c-button-1">
                        <?php the_field('our_strategy_page__section_1__link3__text');?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>