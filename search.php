<?php get_header(); ?>
<div class="o-container o-container--top">
    <div class="o-row">
    <div <?php post_class('c-page'); ?>>
        <div class="o-row__column o-row__column--span-12">
            <header>
                <h1>
                    <?php
                        get_search_query();
                    ?>
                </h1>
            </header>
        </div>
        <div class="o-row__column o-row__column--span-12 o-row__column--span-<?php echo is_active_sidebar( 'primary-sidebar' ) ? '8' : '12'; ?>@medium">
            <main role="main">
                <?php get_template_part( 'loop', 'search' ); ?>
            </main>
        </div>
        <?php if(is_active_sidebar( 'primary-sidebar' )) { ?>
            <div class="o-row__column o-row__column--span-12 o-row__column--span-4@medium">
                <?php get_sidebar(); ?>
            </div>
        <?php } ?>
    </div>
    </div>
</div>
<?php get_footer(); ?>