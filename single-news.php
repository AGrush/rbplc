<?php get_header("myheader") ?>

<div class="o-container o-container--top">
    <div class="o-row">
        <div class="o-row__column o-row__column--span-12 o-row__column--span-12@medium">
            <main role="main">
                <div <?php post_class('c-page'); ?>>
                    <div class="c-single-news">

                    
                        <?php $image = get_field('rev_news_main_img');?>
                        <?php if( !empty( $image ) ): ?>
                            <div class="header-img-wrapper">
                                <img class="header-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>

                        <div class="full-width-wrapper m-border-bottom">
                            <div class="h-news-width back-strip">
                                <a href="<?php echo get_page_link(get_page_id_by_title('news')); ?>"><span class="arrow">&#x2190;</span>back to news homepage</a>
                            </div>
                        </div>
                        

                        <div class="c-single-news__body h-news-width ">
                            <div href="" class="cat-name">
                                <?php the_category() ?>
                            </div>
                            <h1><?php single_post_title(); ?></h1>

                            <div class="c-single-news__the-content">
                                <?php the_content(); ?>
                            </div>
                        </div>

                            

                        <div class="full-width-wrapper m-pr-team">
                            <div class="h-news-width">
                                <div class="pr-contact">
                                    <h4>pr team contact</h4>

                                    <?php if( have_rows('pr_emails') ):while ( have_rows('pr_emails') ) : the_row(); ?>
                                        <a href="<?php the_sub_field('pr_email'); ?>"><?php the_sub_field('pr_email'); ?></a> 
                                    <?php endwhile; else : endif;?>
                                    
                                </div>
                            </div>
                        </div>


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
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>
