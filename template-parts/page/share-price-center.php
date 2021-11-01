<div <?php post_class('c-page'); ?>>

    <div class="share-price-center">

        <div class="heading">
            <div class="share-price-center__spwidget-wrapper">
                <iframe class="share-price-center__brighterir-spwidget"
                src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
            </div>
            <h1>share price center</h1>
        </div>
        <iframe class="share-price-center__brighterir-spinfo"
        src="https://polaris.brighterir.com/public/revolution_beauty_group/tool_group/share_price_information"></iframe>
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