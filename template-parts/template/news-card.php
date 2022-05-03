<div class="item">
    <?php
    if ( has_post_thumbnail() ) {  ?>
      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    <?php } ?>
    <div class="item-top-bits">
        <span class="category">
            <?php 
              is_category() ? single_cat_title() : the_category();
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