<?php get_header("myheader") ?>

<div class="o-container o-container--top">
    <div class="o-row">
        <div class="o-row__column o-row__column--span-12 o-row__column--span-12@medium">
            <main role="main">
                <div <?php post_class('c-page'); ?>>
                    <div class="c-simple-page m-wp">
                        <div class="c-simple-page__heading m-wp m-careers">
                            <h1><?php single_post_title(); ?></h1>
                        </div>
                        <div class="c-simple-page__body m-wp">
                            <span>
                                <?php the_content(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>
