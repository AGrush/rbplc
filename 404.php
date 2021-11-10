<?php get_header(); ?>
<div class="o-container o-container--top">
    <div class="o-row">
        <div class="o-row__column o-row__column--span-12">
            <main role="main">
            <div <?php post_class('c-page m-centered'); ?>>

                <h3><?php esc_html_e('Nothing found here, go back to', '_themename') ?><a href="<?php echo home_url(); ?>"> <u>home page?</u></a></h3>
            </div>

                <!-- output search form if on a 404 page -->
                <!-- <.php get_search_form(); ?> -->
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>