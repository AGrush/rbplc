<div <?php post_class('c-page'); ?>>

    <div class="c-news-page">
        <div class="c-news-page__heading">
            <div class="h-news-width">
                <h1><?php single_post_title(); ?></h1>
            </div>  
        </div>

        <!-- FILTER MENU -->
        <div class="full-width-wrapper m-border-bottom">
            <div class="h-news-width">
                <nav class="news-nav" role="navigation" aria-label="<?php esc_html_e( 'News Navigation', '_themename' ) ?> ">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'news-menu'
                        )) 
                    ?>
                </nav>
            </div>
        </div>

        <div class="h-news-width">
            <span>
                <?php the_content(); ?>
            </span>
        </div>

        <div id="ajax-posts" class="c-news-page__items h-news-width">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $postsPerPage = 6;
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => $postsPerPage,
                // 'posts_per_page' => get_option('posts_per_page'),
                'order' => 'DESC',
                'orderby' => 'date',
                // 'paged' => $paged
            );
            // $my_query = null;
            $my_query = new WP_Query($args);

            if($my_query->have_posts()):

                while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <!-- CUSTOM CODE -->
                    <?php locate_template('template-parts/template/news-card.php', true, false);  ?>
                    
                <?php endwhile; wp_reset_postdata(); ?>
               
            <?php  endif;?>
            </div>

           
            <a id="more_posts"></a>
            

            <?php $image = get_field('join_the_rev_box_img');?>
            <?php if( !empty( $image ) ): ?>
            <div class="h-news-width">
                <div class="c-join-rev-box">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <div class="content">
                        <h2><?php the_field('join_the_rev_box_heading'); ?></h2>
                        <p><?php the_field('join_the_rev_box_body'); ?></p>
                        <a href="<?php the_field('join_the_rev_box_page_link');?>" class="read-more">Sign Up Now<span>&#x2192;</span></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            


    </div>
</div>


