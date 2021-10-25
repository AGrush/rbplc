<div <?php post_class('c-page'); ?>>

    <div class="c-banner-1">
        <div class="c-banner-1__page-title">
            <p><?php the_field('categories_page_title'); ?></p>
        </div>
    </div>

    <div class="c-categories">
        <div class="c-categories__column1">

            <?php $leftColTitle = get_field('label_left_column'); ?>
            <?php if( !empty( $leftColTitle ) ): ?>
            <h1><?php the_field('label_left_column'); ?></h1>
            <?php endif; ?>
            <?php if( empty( $leftColTitle ) ): ?>
            <h1 class='h-hide-s'><?php the_field('label_left_column'); ?></h1>
            <?php endif; ?>


            <?php $bgimageDeskitem_1L = get_field('left_column_item_1__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_1L ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_1L['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_1L['alt']); ?>" />

                    <?php $bgimageMobitem_1L = get_field('left_column_item_1__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_1L ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_1L['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_1L['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_1L = get_field('left_column_item_1__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_1L ) ): ?>
                        <img class="logo"  src="<?php echo esc_url($imageitem_1L['url']); ?>" alt="<?php echo esc_attr($imageitem_1L['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('left_column_item_1__either_heading'); ?></h2>
                    <p> <?php the_field('left_column_item_1__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('left_column_item_1__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_2L = get_field('left_column_item_2__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_2L ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">

                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_2L['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_2L['alt']); ?>" />

                    <?php $bgimageMobitem_2L = get_field('left_column_item_2__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_2L ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_2L['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_2L['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_2L = get_field('left_column_item_2__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_2L ) ): ?>
                        <img class="logo"  src="<?php echo esc_url($imageitem_2L['url']); ?>" alt="<?php echo esc_attr($imageitem_2L['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('left_column_item_2__either_heading'); ?></h2>
                    <p> <?php the_field('left_column_item_2__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('left_column_item_2__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_3L = get_field('left_column_item_3__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_3L ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_3L['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_3L['alt']); ?>" />

                    <?php $bgimageMobitem_3L = get_field('left_column_item_3__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_3L ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_3L['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_3L['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_3L = get_field('left_column_item_3__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_3L ) ): ?>
                        <img class="logo"  src="<?php echo esc_url($imageitem_3L['url']); ?>" alt="<?php echo esc_attr($imageitem_3L['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('left_column_item_3__either_heading'); ?></h2>
                    <p> <?php the_field('left_column_item_3__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('left_column_item_3__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_4L = get_field('left_column_item_4__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_4L ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_4L['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_4L['alt']); ?>" />

                    <?php $bgimageMobitem_4L = get_field('left_column_item_4__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_4L ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_4L['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_4L['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_4L = get_field('left_column_item_4__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_4L ) ): ?>
                        <img class="logo"  src="<?php echo esc_url($imageitem_4L['url']); ?>" alt="<?php echo esc_attr($imageitem_4L['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('left_column_item_4__either_heading'); ?></h2>
                    <p> <?php the_field('left_column_item_4__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('left_column_item_4__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>
            
        </div>

        <div class="c-categories__column2">
            <h1><?php the_field('label_right_column'); ?></h1>

            <?php $bgimageDeskitem_1R = get_field('right_column_item_1__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_1R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_1R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_1R['alt']); ?>" />

                    <?php $bgimageMobitem_1R = get_field('right_column_item_1__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_1R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_1R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_1R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_1R = get_field('right_column_item_1__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_1R ) ): ?>
                        <img class="logo one"  src="<?php echo esc_url($imageitem_1R['url']); ?>" alt="<?php echo esc_attr($imageitem_1R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_1__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_1__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_1__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_2R = get_field('right_column_item_2__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_2R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_2R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_2R['alt']); ?>" />

                    <?php $bgimageMobitem_2R = get_field('right_column_item_2__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_2R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_2R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_2R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_2R = get_field('right_column_item_2__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_2R ) ): ?>
                        <img class="logo two"  src="<?php echo esc_url($imageitem_2R['url']); ?>" alt="<?php echo esc_attr($imageitem_2R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_2__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_2__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_2__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_3R = get_field('right_column_item_3__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_3R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_3R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_3R['alt']); ?>" />

                    <?php $bgimageMobitem_3R = get_field('right_column_item_3__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_3R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_3R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_3R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_3R = get_field('right_column_item_3__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_3R ) ): ?>
                        <img class="logo three"  src="<?php echo esc_url($imageitem_3R['url']); ?>" alt="<?php echo esc_attr($imageitem_3R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_3__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_3__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_3__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_4R = get_field('right_column_item_4__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_4R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_4R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_4R['alt']); ?>" />

                    <?php $bgimageMobitem_4R = get_field('right_column_item_4__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_4R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_4R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_4R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_4R = get_field('right_column_item_4__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_4R ) ): ?>
                        <img class="logo four"  src="<?php echo esc_url($imageitem_4R['url']); ?>" alt="<?php echo esc_attr($imageitem_4R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_4__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_4__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_4__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_5R = get_field('right_column_item_5__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_5R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_5R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_5R['alt']); ?>" />

                    <?php $bgimageMobitem_5R = get_field('right_column_item_5__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_5R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_5R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_5R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_5R = get_field('right_column_item_5__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_5R ) ): ?>
                        <img class="logo five"  src="<?php echo esc_url($imageitem_5R['url']); ?>" alt="<?php echo esc_attr($imageitem_5R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_5__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_5__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_5__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>

            <?php $bgimageDeskitem_6R = get_field('right_column_item_6__background_image_desktop'); ?>
            <?php if( !empty( $bgimageDeskitem_6R ) ): ?>
            <div class="c-category">
                <div class="c-category__img-wrapper">
                    
                    <img class="bg lazyload h-hide-s"  data-src="<?php echo esc_url($bgimageDeskitem_6R['url']); ?>" alt="<?php echo esc_attr($bgimageDeskitem_6R['alt']); ?>" />

                    <?php $bgimageMobitem_6R = get_field('right_column_item_6__background_image_mobile'); ?>
                    <?php if( !empty( $bgimageMobitem_6R ) ): ?>
                        <img class="bg lazyload h-show_only-s"  data-src="<?php echo esc_url($bgimageMobitem_6R['url']); ?>" alt="<?php echo esc_attr($bgimageMobitem_6R['alt']); ?>" />
                    <?php endif; ?>

                    <?php $imageitem_6R = get_field('right_column_item_6__or_heading_img'); ?>
                    <?php if( !empty( $imageitem_6R ) ): ?>
                        <img class="logo"  src="<?php echo esc_url($imageitem_6R['url']); ?>" alt="<?php echo esc_attr($imageitem_6R['alt']); ?>" />
                    <?php endif; ?>
                    
                    <h2><?php the_field('right_column_item_6__either_heading'); ?></h2>
                    <p> <?php the_field('right_column_item_6__strap_line'); ?></p>
                    <span class="c-plus"></span>
                </div>
                <div class="c-category__longtext">
                    <p> <?php the_field('right_column_item_6__long_text'); ?> </p>
                </div>
            </div>
            <?php endif; ?>




        </div>

    </div>

</div>