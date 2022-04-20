<?php 
/*
Template Name: Blank
*/
// blank page for using with theme builder plugins
get_header(); ?>

<main role="main">
    <?php while(have_posts()) { the_post(); ?>
        <article <?php post_class(); ?>>
            <?php the_content(); ?>
        </article>
    <?php } ?>
</main>
        
<?php get_footer(); ?>