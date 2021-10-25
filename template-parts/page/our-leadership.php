<div <?php post_class('c-page'); ?>>

<div class="c-banner-1">

    <div class="c-banner-1__page-title">
        <p><?php the_field('our_leadership_page__section_1__page_title'); ?></p>
    </div>
    
    <div class="video-wrapper">
        <?php $image = get_field('our_leadership_page__section_1__image');
            if( !empty( $image ) ): ?>
                <img class="c-banner-1__mobile-poster m-object-fit" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

    <!-- <div class="box">
        <div class="target"> Target </div>
        <span>In viewport: <strong>false</strong></span>
    </div> -->

    <div class="c-our-leadership">
    
        <div class="board-inner">

            <div class="board-inner__heading">
                <h1><?php the_field('our_leadership_page__section_1__leaders_title'); ?></h1> 
            </div>

            <div class="wrapper-heads">

                <?php $imagePerson1 = get_field('our_leadership_page__section_1__exec_1_img'); ?>
                <?php if( !empty( $imagePerson1 ) ): ?>
                <div class="wrapper-heads__head-div show" data-id="leaderimg1">
                        <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imagePerson1['url']); ?>" alt="<?php echo esc_attr($imagePerson1['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imagePerson2 = get_field('our_leadership_page__section_1__exec_2_img'); ?> 
                <?php if( !empty( $imagePerson2 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg2">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson2['url']); ?>" alt="<?php echo esc_attr($imagePerson2['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imagePerson3 = get_field('our_leadership_page__section_1__exec_3_img'); ?> 
                <?php if( !empty( $imagePerson3 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg3">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson3['url']); ?>" alt="<?php echo esc_attr($imagePerson3['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imagePerson3 = get_field('our_leadership_page__section_1__exec_4_img'); ?> 
                <?php if( !empty( $imagePerson3 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg4">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson3['url']); ?>" alt="<?php echo esc_attr($imagePerson3['alt']); ?>" />
                </div>
                <?php endif; ?>

            </div>

            <div class="wrapper-heads-info show" data-id="leadertxt1">
                <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_1__exec_1_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_1__exec_1_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__exec_1_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt2">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__exec_2_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__exec_2_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__exec_2_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt3">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__exec_3_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__exec_3_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__exec_3_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt4">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__exec_4_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__exec_4_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__exec_4_longtext');?>
                </p>
                <span>X</span>
            </div>


            <div class="wrapper-heads">

                <?php $imageNonExec1 = get_field('our_leadership_page__section_1__non-exec_1_img'); ?>
                <?php if( !empty( $imageNonExec1 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg5">
                        <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imageNonExec1['url']); ?>" alt="<?php echo esc_attr($imageNonExec1['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imageNonExec2 = get_field('our_leadership_page__section_1__non-exec_2_img'); ?> 
                <?php if( !empty( $imageNonExec2 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg6">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec2['url']); ?>" alt="<?php echo esc_attr($imageNonExec2['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imageNonExec3 = get_field('our_leadership_page__section_1__non-exec_3_img'); ?> 
                <?php if( !empty( $imageNonExec3 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg7">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec3['url']); ?>" alt="<?php echo esc_attr($imageNonExec3['alt']); ?>" />
                </div>
                <?php endif; ?>

                <?php $imageNonExec3 = get_field('our_leadership_page__section_1__non-exec_4_img'); ?> 
                <?php if( !empty( $imageNonExec3 ) ): ?>
                <div class="wrapper-heads__head-div" data-id="leaderimg8">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec3['url']); ?>" alt="<?php echo esc_attr($imageNonExec3['alt']); ?>" />
                </div>
                <?php endif; ?>

            </div>

            <div class="wrapper-heads-info" data-id="leadertxt5">
                <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_1__non-exec_1_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_1__non-exec_1_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__non-exec_1_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt6">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__non-exec_2_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__non-exec_2_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__non-exec_2_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt7">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__non-exec_3_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__non-exec_3_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__non-exec_3_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leadertxt8">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_1__non-exec_4_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_1__non-exec_4_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_1__non-exec_4_longtext');?>
                </p>
                <span>X</span>
            </div>



            <div class="button-wrapper">
                <a href="<?php the_field('our_leadership_page__section_1__link_1_url');?>" class="c-button-1">
                    <?php the_field('our_leadership_page__section_1__link_1_text');?>
                </a>
                <a href="<?php the_field('our_leadership_page__section_1__link_2_url');?>" class="c-button-1">
                    <?php the_field('our_leadership_page__section_1__link_2_text');?>
                </a>
                <a href="<?php the_field('our_leadership_page__section_1__link_3_url');?>" class="c-button-1">
                    <?php the_field('our_leadership_page__section_1__link_3_text');?>
                </a>
            </div>
            
        </div>
    </div>

</div>


<div class="c-our-leadership m-full-width">
           
    <div class="board-inner lastone">

        <div class="board-inner__heading">
            <h1><?php the_field('our_leadership_page__section_2__leaders_title'); ?></h1> 
        </div>

        <div class="wrapper-heads">

            <?php $imagePerson11 = get_field('our_leadership_page__section_2__leader14_1_img'); ?>
            <?php if( !empty( $imagePerson11 ) ): ?>
            <div class="wrapper-heads__head-div show" data-id="leaderbelowimg9">
                    <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imagePerson11['url']); ?>" alt="<?php echo esc_attr($imagePerson11['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imagePerson22 = get_field('our_leadership_page__section_2__leader14_2_img'); ?> 
            <?php if( !empty( $imagePerson22 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg10">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson22['url']); ?>" alt="<?php echo esc_attr($imagePerson22['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imagePerson33 = get_field('our_leadership_page__section_2__leader14_3_img'); ?> 
            <?php if( !empty( $imagePerson33 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg11">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson33['url']); ?>" alt="<?php echo esc_attr($imagePerson33['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imagePerson44 = get_field('our_leadership_page__section_2__leader14_4_img'); ?> 
            <?php if( !empty( $imagePerson44 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg12">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson44['url']); ?>" alt="<?php echo esc_attr($imagePerson44['alt']); ?>" />
            </div>
            <?php endif; ?>

        </div>
        <div class="outer-wrapper-heads-info">
            <div class="wrapper-heads-info show" data-id="leaderbelowtxt9">
                <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader14_1_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader14_1_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_2__leader14_1_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leaderbelowtxt10">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_2__leader14_2_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_2__leader14_2_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_2__leader14_2_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leaderbelowtxt11">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_2__leader14_3_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_2__leader14_3_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_2__leader14_3_longtext');?>
                </p>
                <span>X</span>
            </div>

            <div class="wrapper-heads-info" data-id="leaderbelowtxt12">
                <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_2__leader14_4_name');?>
                </h2>
                <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_2__leader14_4_position');?>
                </p>
                <p class="wrapper-heads-info__longtext">
                <?php the_field('our_leadership_page__section_2__leader14_4_longtext');?>
                </p>
                <span>X</span>
            </div>
        </div>
       


        <div class="wrapper-heads">

            <?php $imageNonExec1 = get_field('our_leadership_page__section_2__leader58_1_img'); ?>
            <?php if( !empty( $imageNonExec1 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg13">
                    <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imageNonExec1['url']); ?>" alt="<?php echo esc_attr($imageNonExec1['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imageNonExec2 = get_field('our_leadership_page__section_2__leader58_2_img'); ?> 
            <?php if( !empty( $imageNonExec2 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg14">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec2['url']); ?>" alt="<?php echo esc_attr($imageNonExec2['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imageNonExec3 = get_field('our_leadership_page__section_2__leader58_3_img'); ?> 
            <?php if( !empty( $imageNonExec3 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg15">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec3['url']); ?>" alt="<?php echo esc_attr($imageNonExec3['alt']); ?>" />
            </div>
            <?php endif; ?>

            <?php $imageNonExec4 = get_field('our_leadership_page__section_2__leader58_4_img'); ?> 
            <?php if( !empty( $imageNonExec4 ) ): ?>
            <div class="wrapper-heads__head-div" data-id="leaderbelowimg16">
                    <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec4['url']); ?>" alt="<?php echo esc_attr($imageNonExec4['alt']); ?>" />
            </div>
            <?php endif; ?>

        </div>

        <div class="wrapper-heads-info" data-id="leaderbelowtxt13">
            <h2 class="wrapper-heads-info__name">
                <?php the_field('our_leadership_page__section_2__leader58_1_name');?>
            </h2>
            <p class="wrapper-heads-info__position">
                <?php the_field('our_leadership_page__section_2__leader58_1_position');?>
            </p>
            <p class="wrapper-heads-info__longtext">
            <?php the_field('our_leadership_page__section_2__leader58_1_longtext');?>
            </p>
            <span>X</span>
        </div>

        <div class="wrapper-heads-info" data-id="leaderbelowtxt14">
            <h2 class="wrapper-heads-info__name">
            <?php the_field('our_leadership_page__section_2__leader58_2_name');?>
            </h2>
            <p class="wrapper-heads-info__position">
            <?php the_field('our_leadership_page__section_2__leader58_2_position');?>
            </p>
            <p class="wrapper-heads-info__longtext">
            <?php the_field('our_leadership_page__section_2__leader58_2_longtext');?>
            </p>
            <span>X</span>
        </div>

        <div class="wrapper-heads-info" data-id="leaderbelowtxt15">
            <h2 class="wrapper-heads-info__name">
            <?php the_field('our_leadership_page__section_2__leader58_3_name');?>
            </h2>
            <p class="wrapper-heads-info__position">
            <?php the_field('our_leadership_page__section_2__leader58_3_position');?>
            </p>
            <p class="wrapper-heads-info__longtext">
            <?php the_field('our_leadership_page__section_2__leader58_3_longtext');?>
            </p>
            <span>X</span>
        </div>

        <div class="wrapper-heads-info" data-id="leaderbelowtxt16">
            <h2 class="wrapper-heads-info__name">
            <?php the_field('our_leadership_page__section_2__leader58_4_name');?>
            </h2>
            <p class="wrapper-heads-info__position">
            <?php the_field('our_leadership_page__section_2__leader58_4_position');?>
            </p>
            <p class="wrapper-heads-info__longtext">
            <?php the_field('our_leadership_page__section_2__leader58_4_longtext');?>
            </p>
            <span>X</span>
        </div>

        
    </div>
</div>