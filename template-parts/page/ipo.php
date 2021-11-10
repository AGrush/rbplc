

<div <?php post_class('c-page'); ?>>
    <div class="c-page__content">

        <div class="c-banner-1">

            <div class="c-banner-1__page-title">
                <p><?php the_field('ipo_page__section_1__page_title'); ?></p>
            </div>

            <div class="video-wrapper">
                <?php $imageHpPoster = get_field('ipo_page__section_1__main_image');
                    if( !empty( $imageHpPoster ) ): ?>
                        <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($imageHpPoster['url']); ?>" alt="<?php echo esc_attr($imageHpPoster['alt']); ?>" />
                <?php endif; ?>
            </div>

            <!-- <div class="box">
                <div class="target"> Target </div>
                <span>In viewport: <strong>false</strong></span>
            </div> -->

            <div class="copy-wrapper" data-id="observedArea">
                <div class="copy-inner  m-investors">

                    <div class="copy-wrapper__text m-investors">
                        <h1>
                            <?php the_field('ipo_page__section_1__section_title'); ?>
                        </h1> 
                    </div>

                    <div class="copy-wrapper__text m-investors">
                        <p>
                            <?php the_field('ipo_page__section_1__section_body_copy'); ?>
                        </p> 
                    </div>

                    <div class="copy-wrapper__text m-investors m-bold">
                        <p>
                            <?php the_field('ipo_page__section_1__instructions_text'); ?>
                        </p> 
                    </div>
                        
                    <div class="copy-wrapper__uploads">
                        <?php $file1 = get_field('ipo_page__section_1__file_1');
                        if( $file1 ): ?>
                            <a class="file" href="<?php echo $file1['url']; ?>">
                                <?php the_field('ipo_page__section_1__file_1_title'); ?>
                            </a>
                        <?php endif; ?>

                        <?php $file2 = get_field('ipo_page__section_1__file_2');
                        if( $file2 ): ?>
                            <a class="file" href="<?php echo $file2['url']; ?>">
                                <?php the_field('ipo_page__section_1__file_2_title'); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <a href="<?php the_field('ipo_page__section_1__link_1_address');?>" class="c-button-1">
                        <?php the_field('ipo_page__section_1__link_1_text');?>
                    </a>
                    <br><br><br>
                </div>
            </div>

            <div class="brighterir-shareprice-wrapper">
                <div class="brighterir-shareprice">
                    <iframe src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
                </div>
            </div>

        </div>


        <div class="c-popup-disclaimer h-hidden">
            <div class="disclaimer-content">
                <p class="important">important</p>
                <p class="disclaimer">disclaimer</p>
                <div class="body-copy">
                    <p><?php the_field('popup_disclaimer__multiple_pages__page_title'); ?></p>
                </div>

                <div class="buttons">
                    <a class="c-button-1 accept">
                        accept
                    </a>

                    <a href="<?php echo home_url(); ?>" class="c-button-1 decline">
                        decline
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

