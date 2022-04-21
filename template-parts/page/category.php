<div <?php post_class('c-page'); ?>>

    <div class="c-news-page">
        <div class="c-news-page__heading">
            <div class="h-news-width">
                <h1>
                    <?php  
                        $current_category = single_cat_title();
                        echo $current_category;  
                    ?>
            </h1>
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
            $page_id = get_queried_object_id();

            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => $postsPerPage,
                'cat' => $page_id,
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

           
            <a id="more_posts" data-cid="<?php echo $page_id ?>"></a>

        <?php
            // get the current taxonomy term
            $term = get_queried_object();
            // vars
            $image = get_field('join_the_rev_box_img', $term);
            $heading = get_field('join_the_rev_box_heading', $term);
            $body = get_field('join_the_rev_box_body', $term);
            $link = get_field('join_the_rev_box_page_link', $term);
        ?>
        <?php if( !empty( $image ) ): ?>
        <div class="h-news-width">
            <div class="c-join-rev-box">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="content">
                    <h2><?php echo $heading; ?></h2>
                    <p><?php echo $body; ?></p>
                    <a href="<?php echo $link;?>" class="read-more">Sign Up Now<span>&#x2192;</span></a>
                </div>
            </div>
        </div>
        <?php endif; ?>

            


    </div>
</div>


