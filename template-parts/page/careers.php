<div <?php post_class('c-page'); ?>>

<div class="c-banner-1">
        <div class="c-banner-1__page-title">
            <p><?php the_title(); ?></p>
        </div>
        
        <div class="video-wrapper">
            <?php $image = get_field('careers_page__section_1__image');
                if( !empty( $image ) ): ?>
                    <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>

        <!-- <div class="box">
            <div class="target"> Target </div>
            <span>In viewport: <strong>false</strong></span>
        </div> -->

        <div class="copy-wrapper">
           
            <div class="copy-inner m-tickerspace">

                <div class="copy-wrapper__text m-our-strategy">
                    <p>
                        <?php the_field('careers_page__section_1__text'); ?>
                    </p> 
                </div>
                <div class="button-wrapper">
                    <a href="<?php the_field('careers_page__section_1__link1__url');?>" class="c-button-1">
                        <?php the_field('careers_page__section_1__link1__text');?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="c-banner-fwbg">
    <?php $image = get_field('careers_page__section_2__image');
        if( !empty( $image ) ): ?>
            <img class="c-banner-fwbg__bg_image h-hide-s" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <?php $image2 = get_field('careers_page__section_2__image_mob');
        if( !empty( $image2 ) ): ?>
            <img class="c-banner-fwbg__bg_image h-show_only-s" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
    <?php endif; ?>

    <div class="copy-wrapper">

        <h2>
            <span>Life at</span><span>revolution</span>
        </h2> 

        <div class="button-wrapper">
            <span class="c-button-1 fwbg-button" data-id="1">
                <?php the_field('careers_page__section_2__button1__button_name');?>
            </span>
            <span class="c-button-1 fwbg-button" data-id="2">
                <?php the_field('careers_page__section_2__button2__button_name');?>
            </span>
            <span class="c-button-1 fwbg-button" data-id="3">
                <?php the_field('careers_page__section_2__button3__button_name');?>
            </span>
            <span class="c-button-1 fwbg-button" data-id="4">
                <?php the_field('careers_page__section_2__button4__button_name');?>
            </span>
            <span class="c-button-1 fwbg-button" data-id="5">
                <?php the_field('careers_page__section_2__button5__button_name');?>
            </span>
        </div>

        <div class="text-wrapper fwbg-copy" data-id="1">
            <h3><?php the_field('careers_page__section_2__button1__button_name'); ?></h3>
            <p><?php the_field('careers_page__section_2__button1__button_copy'); ?></p>
        </div>

        <div class="text-wrapper fwbg-copy h-hidden" data-id="2">
            <h3><?php the_field('careers_page__section_2__button2__button_name'); ?></h3>
            <p><?php the_field('careers_page__section_2__button2__button_copy'); ?></p>
        </div>

        <div class="text-wrapper fwbg-copy h-hidden" data-id="3">
            <h3><?php the_field('careers_page__section_2__button3__button_name'); ?></h3>
            <p><?php the_field('careers_page__section_2__button3__button_copy'); ?></p>
        </div>

        <div class="text-wrapper fwbg-copy h-hidden" data-id="4">
            <h3><?php the_field('careers_page__section_2__button4__button_name'); ?></h3>
            <p><?php the_field('careers_page__section_2__button4__button_copy'); ?></p>
        </div>

        <div class="text-wrapper fwbg-copy h-hidden" data-id="5">
            <h3><?php the_field('careers_page__section_2__button5__button_name'); ?></h3>
            <p><?php the_field('careers_page__section_2__button5__button_copy'); ?></p>
        </div>
    </div>
</div>


<div class="c-careers">
    <h1>current roles</h1>
    <p>Filter by department below</p>
    
    <div class="career-selection-section">

        <div class="career-menu">
            <?php
            // ACF Repeater field
            if( have_rows('career_menu_category') ):
                while( have_rows('career_menu_category') ) : the_row();
                    $category_image = get_sub_field('category_image');
                    if( !empty( $category_image ) ):?>
                        <div class="career-menu-item" data-menuitem-department="<?php echo get_sub_field('category_name'); ?>">
                            <img class="career-menu-image" src="<?php echo esc_url($category_image['url']); ?>" alt="<?php echo esc_attr($category_image['alt']); ?>" />
                            <p><?php echo get_sub_field('category_name'); ?></p>
                        </div>
                    <?php endif; ?>
            <?php
                endwhile;
            endif;
            ?> 
        </div>



        <div class="career-roles">

            <?php
            // ACF Repeater field
            if( have_rows('career_roles_list') ):
                while( have_rows('career_roles_list') ) : the_row();
            ?>
                <span class="line"></span>
                <div class="career-role" data-job-department="<?php echo get_sub_field('job_role_department'); ?>">
                    <div class="career-role__first-col">
                        <h3><?php echo get_sub_field('job_role_title'); ?></h3>
                        <p><?php echo get_sub_field('job_role_department'); ?></p>
                    </div>
                    <div class="career-role__second-col">
                        <h3><?php echo get_sub_field('job_role_location'); ?></h3>
                        <p>Location</p>
                    </div>
                    <div class="career-role__third-col">
                        <a href="<?php the_field('link_to_job_detailsapplication_page');?>" class="c-button-1">
                           more info
                        </a>
                    </div>
                </div>

            <?php
            //end ACF Repeater field
                endwhile;
            endif;
            ?>  

        </div>
    </div>
    <!-- <span class="line"></span> -->



    <div class="pagination-controls">
        <span class="chevron left"></span>
            <p><span class="current-page">1</span> of<span class="total-pages"> 3</span></p>
        <span class="chevron right"></span>
    </div>
</div>


