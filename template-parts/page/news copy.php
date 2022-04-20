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

        <div id="ajax-posts" class="c-news-page__items h-news-width">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $postsPerPage = 3;
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
                    <div class="item">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <div class="item-top-bits">
                            <span class="category">
                                <?php the_category(); 
                                ?>
                            </span>
                            <span class="publish-date">
                                <?php the_time($format = 'd/m/Y') ?>
                            </span>
                        </div>
                         
                        <?php the_title( '<h2 class="item-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        <!-- <div class="entry-content">
                            <?php the_content(); ?>
                        </div> -->
                       
                       
                        <a href="<?php the_permalink() ?>" class="read-more">Read More <span>&#x2192;</span></a>
                        <br>
                    </div>
                    
                <?php endwhile; wp_reset_postdata();?>
            </div>

            <a id="more_posts">Load More</a>
                        <br><br><br>
            <!-- <?php
                // CUSTOM PAGINATION
                $total_pages = $my_query->max_num_pages;
                if ($total_pages > 1){
                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('« prev'),
                        'next_text'    => __('next »'),
                    ));
                }
                endif;
                wp_reset_query();
            ?> -->
     


        <div class="c-simple-page__body m-wp">
            <span>
                <?php the_content(); ?>
            </span>
        </div>

    </div>
</div>


