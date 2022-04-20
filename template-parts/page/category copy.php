<div <?php post_class('c-page'); ?>>

    <div class="c-simple-page m-wp">
        <div class="c-simple-page__heading m-wp">      
            <h1><?php 
            $current_category = single_cat_title();
            echo $current_category; 
            ?></h1>
        </div>
        <div class="c-simple-page__body m-wp">
            <span>
                <?php the_content(); ?>
            </span>
        </div>

        <!-- FILTER MENU -->
        <nav class="news-nav" role="navigation" aria-label="<?php esc_html_e( 'News Navigation', '_themename' ) ?> ">
            <?php wp_nav_menu( array(
                'theme_location' => 'news-menu'
                )) 
            ?>
        </nav>



        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            $page_id = get_queried_object_id();

            $args = array(
                'post_type' => 'news',
                'cat' => $page_id,
                'paged' => $paged
            );
            $loop = new WP_Query( $args ) ;
        ?>

        
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <!-- CUSTOM CODE -->
            <?php locate_template('template-parts/template/news-card.php', true, false);  ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
       
    </div>
</div>



