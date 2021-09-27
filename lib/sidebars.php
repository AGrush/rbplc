<?php

//REGISTER PRIMARY SIDEBAR function for index page (need to inlcude this file in functions php)
//WP-ADMIN: Appearance -> Widgets (now exists)
function _themename_sidebar_widgets() {
    register_sidebar( array(
        //this is where the sidebar ID is set
        'id' => 'primary-sidebar',
        'name' => esc_html__( 'Primary Sidebar', '_themename' ),
        'description' => esc_html__( 'This sidebar appears in the blog posts page.', '_themename' ),
        //what to wrap the widget in (%1$s is a unique id generated by wordpress), class placeholder %2$s also important
        'before_widget' => '<section id="%1$s" class="c-sidebar-widget u-margin-bottom-20 %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ) );
    
}


//TO allow the user to select number of columns dynamically
//REGISTER 4 SEPARATE SIDEBARS for widgets in the footer (user can change in theme settings) this is the default setting:
//sanitise from database (using the callback in the customize setting), escape to database.
$footer_layout = sanitize_text_field(get_theme_mod('_themename_footer_layout', '3,3,3,3'));
//remove spaces incase user types them between
$footer_layout = preg_replace('/\s+/', '', $footer_layout);

//explode is php function to separate above string with , into an an array
$columns = explode(',', $footer_layout);

//footer dark mode (user can change in settings)
$footer_bg = _themename_sanitize_footer_bg(get_theme_mod( '_themename_footer_bg', 'dark' ));
$widget_theme = '';
if($footer_bg == 'light'){
    $widget_theme = 'c-footer-widget--dark';
} else {
    $widget_theme = 'c-footer-widget--light';
}


// for each column, register a non primary sidebar(footer) with an array of arguments, a unique id, 
foreach ($columns as $i => $column) {
    register_sidebar( array(
        'id' => 'footer-sidebar-' . ($i + 1),
        //printf is for escaping variables into a string that is translateable (sprintf without echo)
        'name' => sprintf(esc_html__( 'Footer Widgets Column %s', '_themename' ), $i + 1),
        'description' => esc_html__( 'Footer widgets', '_themename' ),
        'before_widget' => '<section id="%1$s" class="c-footer-widget ' . $widget_theme . ' %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}

add_action('widgets_init', '_themename_sidebar_widgets');

?>