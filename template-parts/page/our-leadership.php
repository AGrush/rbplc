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

        <div class="c-our-leadership">
        
            <div class="board-inner">

                <div class="board-inner__heading">
                    <h1><?php the_field('our_leadership_page__section_1__leaders_title'); ?></h1> 
                </div>

                <div class="wrapper-heads">

                    <?php $imagePerson1 = get_field('our_leadership_page__section_1__exec_1_img'); ?>
                    <?php if( !empty( $imagePerson1 ) ): ?>
                        <div class="wrapper-heads__head-wrapper">
                            <div class="wrapper-heads__head-div show" data-id="leaderimg1">
                                <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imagePerson1['url']); ?>" alt="<?php echo esc_attr($imagePerson1['alt']); ?>" />
                            </div>
                            <b class="bod14"><p><?php the_field('our_leadership_page__section_1__exec_1_name');?></p></b>
                            <p class="bod14"><?php the_field('our_leadership_page__section_1__exec_1_position');?></p>
                        </div>
                    <?php endif; ?>

                    <?php $imagePerson2 = get_field('our_leadership_page__section_1__exec_2_img'); ?> 
                    <?php if( !empty( $imagePerson2 ) ): ?>
                        <div class="wrapper-heads__head-wrapper">
                            <div class="wrapper-heads__head-div" data-id="leaderimg2">
                                <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson2['url']); ?>" alt="<?php echo esc_attr($imagePerson2['alt']); ?>" />
                            </div>
                            <b class="bod14"><p><?php the_field('our_leadership_page__section_1__exec_2_name');?></p></b>
                            <p class="bod14"><?php the_field('our_leadership_page__section_1__exec_2_position');?></p>
                        </div>
                    <?php endif; ?>

                    <?php $imagePerson3 = get_field('our_leadership_page__section_1__exec_3_img'); ?> 
                    <?php if( !empty( $imagePerson3 ) ): ?>
                        <div class="wrapper-heads__head-wrapper">
                            <div class="wrapper-heads__head-div" data-id="leaderimg3">
                                <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson3['url']); ?>" alt="<?php echo esc_attr($imagePerson3['alt']); ?>" />
                            </div>
                            <b class="bod14"><p><?php the_field('our_leadership_page__section_1__exec_3_name');?></p></b>
                            <p class="bod14"><?php the_field('our_leadership_page__section_1__exec_3_position');?></p>
                        </div>
                    <?php endif; ?>

                    <?php $imagePerson3 = get_field('our_leadership_page__section_1__exec_4_img'); ?> 
                    <?php if( !empty( $imagePerson3 ) ): ?>
                        <div class="wrapper-heads__head-div" data-id="leaderimg4">
                            <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson3['url']); ?>" alt="<?php echo esc_attr($imagePerson3['alt']); ?>" />
                        </div>
                        <b class="bod14"><p><?php the_field('our_leadership_page__section_1__exec_4_name');?></p></b>
                        <p class="bod14"><?php the_field('our_leadership_page__section_1__exec_4_position');?></p>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
                </div>


                <div class="wrapper-heads two fourxfour">

                    <?php $imageNonExec1 = get_field('our_leadership_page__section_1__non-exec_1_img'); ?>
                    <?php if( !empty( $imageNonExec1 ) ): ?>
                    <div class="wrapper-heads__head-wrapper">
                        <div class="wrapper-heads__head-div"  data-id="leaderimg5">
                            <img class="wrapper-heads__head-img"  src="<?php echo esc_url($imageNonExec1['url']); ?>" alt="<?php echo esc_attr($imageNonExec1['alt']); ?>" />
                        </div>
                        <b class="bod58"><p><?php the_field('our_leadership_page__section_1__non-exec_1_name');?></p></b>
                        <p class="bod58"><?php the_field('our_leadership_page__section_1__non-exec_1_position');?></p>
                    </div>
                    <?php endif; ?>

                    <?php $imageNonExec2 = get_field('our_leadership_page__section_1__non-exec_2_img'); ?> 
                    <?php if( !empty( $imageNonExec2 ) ): ?>
                    <div class="wrapper-heads__head-wrapper">
                        <div class="wrapper-heads__head-div"  data-id="leaderimg6">
                            <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec2['url']); ?>" alt="<?php echo esc_attr($imageNonExec2['alt']); ?>" />
                        </div>
                        <b class="bod58"><p><?php the_field('our_leadership_page__section_1__non-exec_2_name');?></p></b>
                        <p class="bod58"><?php the_field('our_leadership_page__section_1__non-exec_2_position');?></p>
                    </div>
                    <?php endif; ?>

                    <?php $imageNonExec3 = get_field('our_leadership_page__section_1__non-exec_3_img'); ?> 
                    <?php if( !empty( $imageNonExec3 ) ): ?>
                    <div class="wrapper-heads__head-wrapper">
                        <div class="wrapper-heads__head-div"  data-id="leaderimg7">
                            <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec3['url']); ?>" alt="<?php echo esc_attr($imageNonExec3['alt']); ?>" />
                        </div>
                        <b class="bod58"><p><?php the_field('our_leadership_page__section_1__non-exec_3_name');?></p></b>
                        <p class="bod58"><?php the_field('our_leadership_page__section_1__non-exec_3_position');?></p>
                    </div>
                    <?php endif; ?>

                    <?php $imageNonExec4 = get_field('our_leadership_page__section_1__non-exec_4_img'); ?> 
                    <?php if( !empty( $imageNonExec4 ) ): ?>
                    <div class="wrapper-heads__head-wrapper">
                        <div class="wrapper-heads__head-div"  data-id="leaderimg8">
                            <img class="wrapper-heads__head-img" src="<?php echo esc_url($imageNonExec4['url']); ?>" alt="<?php echo esc_attr($imageNonExec4['alt']); ?>" />
                        </div>
                        <b class="bod58"><p><?php the_field('our_leadership_page__section_1__non-exec_4_name');?></p></b>
                        <p class="bod58"><?php the_field('our_leadership_page__section_1__non-exec_4_position');?></p>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
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
                    <span class="c-plus cross"></span>
                </div>

            </div>
        </div>
    </div>

    <div class="c-our-leadership-all">
            
        <div class="board-inner lastone">

            <div class="board-inner__heading">
                <h1><?php the_field('our_leadership_page__section_2__leaders_title'); ?></h1> 
            </div>

            <!-- DESKTOP -->

            <div class="wrapper-heads h-show_only-desktop one">
                <?php $imagePerson13 = get_field('our_leadership_page__section_2__leader4_img'); ?> 
                <?php if( !empty( $imagePerson13 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg4">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson13['url']); ?>" alt="<?php echo esc_attr($imagePerson13['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader4_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader4_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson14 = get_field('our_leadership_page__section_2__leader5_img'); ?> 
                <?php if( !empty( $imagePerson14 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg5">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson14['url']); ?>" alt="<?php echo esc_attr($imagePerson14['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader5_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader5_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson15 = get_field('our_leadership_page__section_2__leader6_img'); ?> 
                <?php if( !empty( $imagePerson15 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg6">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson15['url']); ?>" alt="<?php echo esc_attr($imagePerson15['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader6_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader6_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson16 = get_field('our_leadership_page__section_2__leader7_img'); ?> 
                <?php if( !empty( $imagePerson16 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg7">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson16['url']); ?>" alt="<?php echo esc_attr($imagePerson16['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader7_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader7_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson17 = get_field('our_leadership_page__section_2__leader8_img'); ?> 
                <?php if( !empty( $imagePerson17 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg8">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson17['url']); ?>" alt="<?php echo esc_attr($imagePerson17['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader8_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader8_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson18 = get_field('our_leadership_page__section_2__leader9_img'); ?> 
                <?php if( !empty( $imagePerson18 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg9">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson18['url']); ?>" alt="<?php echo esc_attr($imagePerson18['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader9_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader9_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-desktop one">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt4">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader4_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader4_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader4_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt5">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader5_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader5_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader5_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt6">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader6_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader6_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader6_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt7">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader7_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader7_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader7_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt8">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader8_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader8_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader8_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt9">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader9_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader9_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader9_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>
                
            <div class="wrapper-heads h-show_only-desktop two">

                <?php $imagePerson19 = get_field('our_leadership_page__section_2__leader10_img'); ?> 
                <?php if( !empty( $imagePerson19 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg10">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson19['url']); ?>" alt="<?php echo esc_attr($imagePerson19['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader10_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader10_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson20 = get_field('our_leadership_page__section_2__leader11_img'); ?> 
                <?php if( !empty( $imagePerson20 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg11">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson20['url']); ?>" alt="<?php echo esc_attr($imagePerson20['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader11_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader11_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson21 = get_field('our_leadership_page__section_2__leader12_img'); ?> 
                <?php if( !empty( $imagePerson21 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg12">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson21['url']); ?>" alt="<?php echo esc_attr($imagePerson21['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader12_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader12_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson22 = get_field('our_leadership_page__section_2__leader13_img'); ?> 
                <?php if( !empty( $imagePerson22 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg13">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson22['url']); ?>" alt="<?php echo esc_attr($imagePerson22['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader13_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader13_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson23 = get_field('our_leadership_page__section_2__leader14_img'); ?> 
                <?php if( !empty( $imagePerson23 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg14">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson23['url']); ?>" alt="<?php echo esc_attr($imagePerson23['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader14_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader14_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson24 = get_field('our_leadership_page__section_2__leader15_img'); ?> 
                <?php if( !empty( $imagePerson24 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg15">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson24['url']); ?>" alt="<?php echo esc_attr($imagePerson24['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader15_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader15_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-desktop two">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt10">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader10_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader10_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader10_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt11">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader11_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader11_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader11_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt12">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader12_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader12_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader12_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt13">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader13_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader13_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader13_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt14">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader14_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader14_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader14_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt15">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader15_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader15_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader15_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-desktop three">


                <?php $imagePerson25 = get_field('our_leadership_page__section_2__leader16_img'); ?> 
                <?php if( !empty( $imagePerson25 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg16">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson25['url']); ?>" alt="<?php echo esc_attr($imagePerson25['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader16_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader16_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson26 = get_field('our_leadership_page__section_2__leader17_img'); ?> 
                <?php if( !empty( $imagePerson26 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg17">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson26['url']); ?>" alt="<?php echo esc_attr($imagePerson26['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader17_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader17_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson27 = get_field('our_leadership_page__section_2__leader18_img'); ?> 
                <?php if( !empty( $imagePerson27 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg18">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson27['url']); ?>" alt="<?php echo esc_attr($imagePerson27['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader18_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader18_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson28 = get_field('our_leadership_page__section_2__leader19_img'); ?> 
                <?php if( !empty( $imagePerson28 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg19">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson28['url']); ?>" alt="<?php echo esc_attr($imagePerson28['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader19_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader19_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson29 = get_field('our_leadership_page__section_2__leader20_img'); ?> 
                <?php if( !empty( $imagePerson29 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg20">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson29['url']); ?>" alt="<?php echo esc_attr($imagePerson29['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader20_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader20_position');?></p>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="info-wrapper h-show_only-desktop three">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt16">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader16_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader16_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader16_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt17">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader17_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader17_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader17_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt18">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader18_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader18_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader18_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt19">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader19_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader19_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader19_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt20">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader20_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader20_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader20_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <!-- TABLET -->

            <div class="wrapper-heads h-show_only-tablet one">
                <?php $imagePerson13 = get_field('our_leadership_page__section_2__leader4_img'); ?> 
                <?php if( !empty( $imagePerson13 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg4">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson13['url']); ?>" alt="<?php echo esc_attr($imagePerson13['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader4_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader4_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson14 = get_field('our_leadership_page__section_2__leader5_img'); ?> 
                <?php if( !empty( $imagePerson14 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg5">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson14['url']); ?>" alt="<?php echo esc_attr($imagePerson14['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader5_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader5_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson15 = get_field('our_leadership_page__section_2__leader6_img'); ?> 
                <?php if( !empty( $imagePerson15 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg6">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson15['url']); ?>" alt="<?php echo esc_attr($imagePerson15['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader6_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader6_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson16 = get_field('our_leadership_page__section_2__leader7_img'); ?> 
                <?php if( !empty( $imagePerson16 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg7">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson16['url']); ?>" alt="<?php echo esc_attr($imagePerson16['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader7_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader7_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson17 = get_field('our_leadership_page__section_2__leader8_img'); ?> 
                <?php if( !empty( $imagePerson17 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg8">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson17['url']); ?>" alt="<?php echo esc_attr($imagePerson17['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader8_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader8_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-tablet one">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt4">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader4_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader4_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader4_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt5">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader5_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader5_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader5_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt6">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader6_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader6_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader6_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt7">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader7_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader7_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader7_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt8">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader8_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader8_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader8_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>
                
            <div class="wrapper-heads h-show_only-tablet two">
                <?php $imagePerson18 = get_field('our_leadership_page__section_2__leader9_img'); ?> 
                <?php if( !empty( $imagePerson18 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg9">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson18['url']); ?>" alt="<?php echo esc_attr($imagePerson18['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader9_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader9_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson19 = get_field('our_leadership_page__section_2__leader10_img'); ?> 
                <?php if( !empty( $imagePerson19 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg10">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson19['url']); ?>" alt="<?php echo esc_attr($imagePerson19['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader10_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader10_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson20 = get_field('our_leadership_page__section_2__leader11_img'); ?> 
                <?php if( !empty( $imagePerson20 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg11">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson20['url']); ?>" alt="<?php echo esc_attr($imagePerson20['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader11_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader11_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson21 = get_field('our_leadership_page__section_2__leader12_img'); ?> 
                <?php if( !empty( $imagePerson21 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg12">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson21['url']); ?>" alt="<?php echo esc_attr($imagePerson21['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader12_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader12_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson22 = get_field('our_leadership_page__section_2__leader13_img'); ?> 
                <?php if( !empty( $imagePerson22 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg13">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson22['url']); ?>" alt="<?php echo esc_attr($imagePerson22['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader13_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader13_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-tablet two">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt9">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader9_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader9_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader9_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt10">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader10_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader10_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader10_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt11">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader11_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader11_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader11_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt12">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader12_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader12_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader12_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt13">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader13_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader13_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader13_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-tablet three">
                <?php $imagePerson23 = get_field('our_leadership_page__section_2__leader14_img'); ?> 
                <?php if( !empty( $imagePerson23 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg14">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson23['url']); ?>" alt="<?php echo esc_attr($imagePerson23['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader14_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader14_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson24 = get_field('our_leadership_page__section_2__leader15_img'); ?> 
                <?php if( !empty( $imagePerson24 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg15">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson24['url']); ?>" alt="<?php echo esc_attr($imagePerson24['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader15_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader15_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson25 = get_field('our_leadership_page__section_2__leader16_img'); ?> 
                <?php if( !empty( $imagePerson25 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg16">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson25['url']); ?>" alt="<?php echo esc_attr($imagePerson25['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader16_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader16_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson26 = get_field('our_leadership_page__section_2__leader17_img'); ?> 
                <?php if( !empty( $imagePerson26 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg17">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson26['url']); ?>" alt="<?php echo esc_attr($imagePerson26['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader17_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader17_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson27 = get_field('our_leadership_page__section_2__leader18_img'); ?> 
                <?php if( !empty( $imagePerson27 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg18">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson27['url']); ?>" alt="<?php echo esc_attr($imagePerson27['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader18_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader18_position');?></p>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="info-wrapper h-show_only-tablet three">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt14">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader14_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader14_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader14_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt15">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader15_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader15_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader15_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt16">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader16_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader16_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader16_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt17">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader17_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader17_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader17_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt18">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader18_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader18_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader18_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-tablet four">
                <?php $imagePerson28 = get_field('our_leadership_page__section_2__leader19_img'); ?> 
                <?php if( !empty( $imagePerson28 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg19">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson28['url']); ?>" alt="<?php echo esc_attr($imagePerson28['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader19_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader19_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson29 = get_field('our_leadership_page__section_2__leader20_img'); ?> 
                <?php if( !empty( $imagePerson29 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg20">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson29['url']); ?>" alt="<?php echo esc_attr($imagePerson29['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader20_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader20_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-tablet four">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt19">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader19_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader19_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader19_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt20">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader20_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader20_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader20_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <!-- MOBILE -->
            
            <div class="wrapper-heads h-show_only-s one">
                <?php $imagePerson13 = get_field('our_leadership_page__section_2__leader4_img'); ?> 
                <?php if( !empty( $imagePerson13 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg4">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson13['url']); ?>" alt="<?php echo esc_attr($imagePerson13['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader4_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader4_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson14 = get_field('our_leadership_page__section_2__leader5_img'); ?> 
                <?php if( !empty( $imagePerson14 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg5">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson14['url']); ?>" alt="<?php echo esc_attr($imagePerson14['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader5_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader5_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson15 = get_field('our_leadership_page__section_2__leader6_img'); ?> 
                <?php if( !empty( $imagePerson15 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg6">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson15['url']); ?>" alt="<?php echo esc_attr($imagePerson15['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader6_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader6_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-s one">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt4">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader4_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader4_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader4_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt5">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader5_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader5_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader5_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt6">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader6_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader6_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader6_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>
                
            <div class="wrapper-heads h-show_only-s two">
                <?php $imagePerson16 = get_field('our_leadership_page__section_2__leader7_img'); ?> 
                <?php if( !empty( $imagePerson16 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg7">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson16['url']); ?>" alt="<?php echo esc_attr($imagePerson16['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader7_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader7_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson17 = get_field('our_leadership_page__section_2__leader8_img'); ?> 
                <?php if( !empty( $imagePerson17 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg8">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson17['url']); ?>" alt="<?php echo esc_attr($imagePerson17['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader8_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader8_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson18 = get_field('our_leadership_page__section_2__leader9_img'); ?> 
                <?php if( !empty( $imagePerson18 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg9">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson18['url']); ?>" alt="<?php echo esc_attr($imagePerson18['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader9_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader9_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-s two">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt7">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader7_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader7_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader7_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt8">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader8_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader8_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader8_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt9">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader9_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader9_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader9_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-s three">
                <?php $imagePerson19 = get_field('our_leadership_page__section_2__leader10_img'); ?> 
                <?php if( !empty( $imagePerson19 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg10">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson19['url']); ?>" alt="<?php echo esc_attr($imagePerson19['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader10_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader10_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson20 = get_field('our_leadership_page__section_2__leader11_img'); ?> 
                <?php if( !empty( $imagePerson20 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg11">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson20['url']); ?>" alt="<?php echo esc_attr($imagePerson20['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader11_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader11_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson21 = get_field('our_leadership_page__section_2__leader12_img'); ?> 
                <?php if( !empty( $imagePerson21 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg12">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson21['url']); ?>" alt="<?php echo esc_attr($imagePerson21['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader12_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader12_position');?></p>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="info-wrapper h-show_only-s three">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt10">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader10_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader10_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader10_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt11">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader11_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader11_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader11_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt12">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader12_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader12_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader12_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-s four">
                <?php $imagePerson22 = get_field('our_leadership_page__section_2__leader13_img'); ?> 
                <?php if( !empty( $imagePerson22 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg13">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson22['url']); ?>" alt="<?php echo esc_attr($imagePerson22['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader13_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader13_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson23 = get_field('our_leadership_page__section_2__leader14_img'); ?> 
                <?php if( !empty( $imagePerson23 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg14">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson23['url']); ?>" alt="<?php echo esc_attr($imagePerson23['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader14_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader14_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson24 = get_field('our_leadership_page__section_2__leader15_img'); ?> 
                <?php if( !empty( $imagePerson24 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg15">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson24['url']); ?>" alt="<?php echo esc_attr($imagePerson24['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader15_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader15_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-s four">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt13">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader13_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader13_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader13_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt14">
                    <h2 class="wrapper-heads-info__name">
                        <?php the_field('our_leadership_page__section_2__leader14_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                        <?php the_field('our_leadership_page__section_2__leader14_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader14_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt15">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader15_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader15_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader15_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>

            <div class="wrapper-heads h-show_only-s five">
                <?php $imagePerson25 = get_field('our_leadership_page__section_2__leader16_img'); ?> 
                <?php if( !empty( $imagePerson25 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div"  data-id="leaderbelowimg16">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson25['url']); ?>" alt="<?php echo esc_attr($imagePerson25['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader16_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader16_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson26 = get_field('our_leadership_page__section_2__leader17_img'); ?> 
                <?php if( !empty( $imagePerson26 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg17">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson26['url']); ?>" alt="<?php echo esc_attr($imagePerson26['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader17_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader17_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson27 = get_field('our_leadership_page__section_2__leader18_img'); ?> 
                <?php if( !empty( $imagePerson27 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg18">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson27['url']); ?>" alt="<?php echo esc_attr($imagePerson27['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader18_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader18_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-s five">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt16">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader16_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader16_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader16_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt17">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader17_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader17_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader17_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt18">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader18_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader18_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader18_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>


            <div class="wrapper-heads h-show_only-s six">
                <?php $imagePerson28 = get_field('our_leadership_page__section_2__leader19_img'); ?> 
                <?php if( !empty( $imagePerson28 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg19">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson28['url']); ?>" alt="<?php echo esc_attr($imagePerson28['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader19_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader19_position');?></p>
                </div>
                <?php endif; ?>

                <?php $imagePerson29 = get_field('our_leadership_page__section_2__leader20_img'); ?> 
                <?php if( !empty( $imagePerson29 ) ): ?>
                <div class="wrapper-heads__head-wrapper">
                    <div class="wrapper-heads__head-div" data-id="leaderbelowimg20">
                        <img class="wrapper-heads__head-img" src="<?php echo esc_url($imagePerson29['url']); ?>" alt="<?php echo esc_attr($imagePerson29['alt']); ?>" />
                    </div>
                    <b><p><?php the_field('our_leadership_page__section_2__leader20_name');?></p></b>
                    <p><?php the_field('our_leadership_page__section_2__leader20_position');?></p>
                </div>
                <?php endif; ?>
            </div>

            <div class="info-wrapper h-show_only-s six">
                <div class="wrapper-heads-info" data-id="leaderbelowtxt19">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader19_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader19_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader19_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>

                <div class="wrapper-heads-info" data-id="leaderbelowtxt20">
                    <h2 class="wrapper-heads-info__name">
                    <?php the_field('our_leadership_page__section_2__leader20_name');?>
                    </h2>
                    <p class="wrapper-heads-info__position">
                    <?php the_field('our_leadership_page__section_2__leader20_position');?>
                    </p>
                    <p class="wrapper-heads-info__longtext">
                    <?php the_field('our_leadership_page__section_2__leader20_longtext');?>
                    </p>
                    <span class="c-plus cross"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="c-departments-wrapper">
        <h2><?php the_field('our_leadership_page__section_3__departments_title'); ?></h2>
        <div class="arrow-container h-show_only-s">
        <span class="chevron left"></span><span class="chevron right"></span>
        </div>
        <div class="c-departments">
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_1');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_1'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_2');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_2'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_3');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_3'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_4');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_4'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_5');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_5'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_6');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_6'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_7');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_7'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                    <?php $depimg1 = get_field('our_leadership_page__section_3__icon_8');
                        if( !empty( $depimg1 ) ): ?>
                            <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_8'); ?>
            </div>
            <div class="c-departments__department">
                <div class="c-departments__icon-wrapper">
                <?php $depimg1 = get_field('our_leadership_page__section_3__icon_9');
                    if( !empty( $depimg1 ) ): ?>
                        <img class="c-departments__icon" src="<?php echo esc_url($depimg1['url']); ?>" alt="<?php echo esc_attr($depimg1['alt']); ?>" />
                <?php endif; ?>
                </div>
                <?php the_field('our_leadership_page__section_3__department_9'); ?>
            </div>
        </div>
    </div>

</div>