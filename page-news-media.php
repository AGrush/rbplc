<?php /* Template Name: News / Media Template */ ?>

<?php get_header("myheader") ?>
<div class="o-container u-margin-bottom-40">
    <div class="o-row">
        <div class="o-row__column o-row__column--span-12 o-row__column--span-12@medium">
            <main role="main">
                <?php get_template_part( 'template-parts/page/news-media'); ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer() ?>
