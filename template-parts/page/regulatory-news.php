<div <?php post_class('c-page'); ?>>

    <div class="c-simple-page">

        <div class="c-simple-page__heading">
            <div class="c-simple-page__spwidget-wrapper">
                <iframe class="c-simple-page__brighterir-spwidget"
                src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
            </div>
            <h1><?php the_field('regulatory_news_26_page__section_1__page_title'); ?></h1>
        </div>

        
       
        <iframe class="c-simple-page__widget" src="https://polaris.brighterir.com/public/revolution_beauty_group/news/rns" frameborder="0"></iframe>
     
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