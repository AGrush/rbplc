

<div <?php post_class('c-page'); ?>>
    <div class="c-page__content">

        <div class="c-banner-1">

            <div class="c-banner-1__page-title">
                <p><?php the_field('rr_page__section_1__page_title'); ?></p>
            </div>

            <div class="video-wrapper">

                <?php $imageHpPoster = get_field('rr_page__section_1__main_image');
                    if( !empty( $imageHpPoster ) ): ?>
                        <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($imageHpPoster['url']); ?>" alt="<?php echo esc_attr($imageHpPoster['alt']); ?>" />
                <?php endif; ?>
            
            </div>

            <!-- <div class="box">
                <div class="target"> Target </div>
                <span>In viewport: <strong>false</strong></span>
            </div> -->

            <div class="copy-wrapper" data-id="observedArea">
            
            
                <div class="copy-inner m-tickerspace">

                    <div class="copy-wrapper__text m-bold">
                        <p>
                            <?php the_field('rr_page__section_1__instructions_text'); ?>
                        </p> 
                    </div>
                        
                    <div class="copy-wrapper__uploads">
                        <?php $file1 = get_field('rr_page__section_1__file_1');
                        if( $file1 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file1['url']; ?>">
                                <?php the_field('rr_page__section_1__file_1_title'); ?>
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>

                        <?php $file2 = get_field('rr_page__section_1__file_2');
                        if( $file2 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file2['url']; ?>">
                                <?php the_field('rr_page__section_1__file_2_title'); ?> 
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>

                        <?php $file3 = get_field('rr_page__section_1__file_3');
                        if( $file3 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file3['url']; ?>">
                                <?php the_field('rr_page__section_1__file_3_title'); ?> 
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>

                        <?php $file4 = get_field('rr_page__section_1__file_4');
                        if( $file4 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file4['url']; ?>">
                                <?php the_field('rr_page__section_1__file_4_title'); ?> 
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>

                        <?php $file5 = get_field('rr_page__section_1__file_5');
                        if( $file5 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file5['url']; ?>">
                                <?php the_field('rr_page__section_1__file_5_title'); ?> 
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>


                        <?php $file6 = get_field('rr_page__section_1__file_6');
                        if( $file6 ): ?>
                            <a class="c-button-1 download-btn" href="<?php echo $file6['url']; ?>">
                                <?php the_field('rr_page__section_1__file_6_title'); ?> 
                                <svg id="icon-download-dark" viewBox="0 0 32 30"><g fill-rule="nonzero"><path d="M10.878 13.878c-.412-.358-1.064-.358-1.441.033-.378.39-.378 1.008.034 1.365l6.178 5.464c.206.162.446.26.686.26.24 0 .515-.098.687-.26l6.177-5.464a.908.908 0 00.035-1.365 1.035 1.035 0 00-1.442-.033l-4.393 3.935V1.976c0-.553-.446-.976-1.03-.976-.583 0-1.03.423-1.03.976v15.837l-4.46-3.935z"></path><path d="M27.631 7h-6.158c-.581 0-1.026.433-1.026 1s.445 1 1.026 1h5.132v18H6.079V9h5.131c.582 0 1.027-.433 1.027-1s-.445-1-1.027-1H5.052c-.581 0-1.026.433-1.026 1v20c0 .567.445 1 1.026 1h22.58c.58 0 1.026-.433 1.026-1V8c0-.567-.445-1-1.027-1z"></path></g></svg>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            
            </div>

            <div class="brighterir-shareprice-wrapper">
                <div class="brighterir-shareprice">
                    <iframe src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
                </div>
            </div>

            <?php $image = get_field('rr_page__section_1__small_image');
            if( !empty( $image ) ): ?>
                <img class="c-banner-1__small-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

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

