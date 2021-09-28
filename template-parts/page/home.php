

<div <?php post_class('c-page u-margin-bottom-20'); ?>>
    <div class="c-page__content">

    <div class="c-banner-1">
        <?php $image = get_field('home_image');
        if( !empty( $image ) ): ?>
            <img class="c-banner-1__big-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="copy-wrapper">
            <div class="copy-wrapper__heading">
                <h1> 
                    <?php the_field('home_heading_text'); ?>
                </h1>
            </div>
            <div class="copy-wrapper__text">
                <p>
                    <?php the_field('home_paragraph_text'); ?>
                </p> 
            </div>
            <a href="<?php the_field('home_page__section_1__link_address');?>" class="c-button-1">
                about us
            </a>
        </div>
        <?php $image = get_field('home_small_image');
        if( !empty( $image ) ): ?>
            <img class="c-banner-1__small-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>

       
    
        <br><br><br><br><br><br><br><br><br><br><br>
   

       



    </div>
</div>