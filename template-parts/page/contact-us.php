<div <?php post_class('c-page'); ?>>

    <div class="c-simple-page">

        <div class="c-simple-page__heading">
            <div class="c-simple-page__spwidget-wrapper">
                <iframe class="c-simple-page__brighterir-spwidget"
                src="https://polaris.brighterir.com/public/revolution_beauty_group/data_table/share_price_widget"></iframe>
            </div>
            <h1><?php the_field('contact_us_page__page_title'); ?></h1>
        </div>

        
        <div class="c-simple-page__body m-centered">
            <span>
                <?php the_field('contact_us_page__page_body'); ?>
            </span>
        </div>
    </div>

</div>