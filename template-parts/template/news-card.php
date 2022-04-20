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
    
    
    <a href="<?php the_permalink() ?>" class="read-more">Read More <span>&#x2192;</span></a>
    <br>
</div>