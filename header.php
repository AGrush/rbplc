<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $url = site_url(); ?>
    <link rel='preload' href='<?php echo $url . "/wp-content/themes/_themename/dist/assets/fonts/Sweet-Sans-Bold/09121956-e278-4bed-a007-66c38b533104-3.woff" ?>' as='font' type='font/woff' crossorigin>
    <link rel='preload' href='<?php echo $url . "/wp-content/themes/_themename/dist/assets/fonts/Sweet-Sans-Medium/08ccab92-0c5e-47bc-89a0-a791289186bd-3.woff" ?>' as='font' type='font/woff' crossorigin>
    <link rel='preload' href='<?php echo $url . "/wp-content/themes/_themename/dist/assets/fonts/Sweet-Sans-Regular/bd9ae3e5-8426-48f5-b930-8bc0d39004d8-3.woff" ?>' as='font' type='font/woff' crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <!-- skip link for keyboard accessibility of main conent -->
    <a class="u-skip-link" href="#content"><?php esc_attr_e('Skip to content', '_themename'); ?></a>
    <header role="banner">
        <div class="c-header">
            <div class="o-container u-flex u-align-middle u-justify-center">

                <div class="c-burger-btn">
                    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                    <label for="openSidebarMenu" class="sidebarIconToggle">
                        <div class="spinner diagonal part-1"></div>
                        <div class="spinner horizontal"></div>
                        <div class="spinner diagonal part-2"></div>
                    </label>
                </div>
                


                <div class="c-header__logo u-flex">
                    <?php if(has_custom_logo( )) {
                        the_custom_logo();
                    } else { ?>
                        <a class="c-header__blogname" href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
                    <?php } ?>
                </div>

                <!-- get_search_form takes a booleean, if true, it generates a search form using some wordpress html, it first searches for searchform.php in ur theme and if not found generates basic search form wordpress html -->
                <!-- <X????????php get_search_form( true ); ?> -->
            </div>
        </div>
        
        <div class="c-navigation">
            <div class="o-container">
                <nav class="header-nav" role="navigation" aria-label="<?php esc_html_e( 'Main Navigation', '_themename' ) ?> ">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu'
                        )) 
                    ?>
                </nav>
            </div>
        </div>
    </header>

 
    <div id="content">

    

  