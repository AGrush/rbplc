<?php 

@ini_set('upload_max_size' , '512M');
@ini_set('post_max_size', '512M');
@ini_set('max_execution_time', '300');

//customise-api settings
require_once('lib/customize.php');

require_once('lib/helpers.php');

require_once('lib/enqueue-assets.php');

//need sidebars defined to have 'Widgets' option in 'Appearance'
require_once('lib/sidebars.php');

//wordpress html5 tag support functions
require_once('lib/theme-support.php');

//nav bar support
require_once('lib/navigation.php');

//nav bar support
require_once('lib/acf.php');

//mobile detect
require_once "lib/Mobile_Detect.php";

//delete-posts
// require_once('lib/delete-post.php');

//metaboxes - coming from a plugin now
//require_once('lib/metaboxes.php');

//ask to activate necessary plugins we've built using tgm plugin activator here, add new plugin paths in here
// require_once('lib/include-plugins.php');

//change comments markup
// require_once('lib/comment-callback.php');

//image rules
require_once('lib/images.php');


// remove admin post and commments pages
add_action('admin_menu', 'remove_options');
 
function remove_options() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}








// PAGINATION FUNCTION
// function post_pagination($paged = '', $max_page = '') {
//     if (!$paged) {
//         $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
//     }

//     if (!$max_page) {
//         global $wp_query;
//         $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
//     }

//     $big  = 999999999; // need an unlikely integer

//     $html = paginate_links(array(
//         'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//         'format'     => '?paged=%#%',
//         'current'    => max(1, $paged),
//         'total'      => $max_page,
//         'mid_size'   => 1,
//         'prev_text'  => __('« Prev'),
//         'next_text'  => __('Next »'),
//     ));

//     $html = "<div class='navigation pagination'>" . $html . "</div>";

//     echo $html;
// }



// Our custom post type function
function create_posttype() {
  
    register_post_type( 'news',
    // CPT Options
        array(
            'public' => true,
            'label' => 'Rev News',
            'capability_type' => 'post',
            'publicly_queryable' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'news-article', 'with_front' => true),
            'query_var' => true,
            'has_archive' => true,
            'taxonomies'  => array( 'category' ),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail')

            
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// RESET
// flush_rewrite_rules();


// custom AJAX load more blog call
function localise_script() {
    wp_localize_script( '_themename-scripts', 'ajax_posts', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'noposts' => __('No older posts found', 'twentyfifteen'),
    ));	
}
add_action( 'wp_enqueue_scripts', 'localise_script' );




function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 6;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $page_id = (isset(($_POST['cid']))) ? ($_POST['cid']) : '';
    
    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'posts_per_page' => $ppp,
        'cat' => $page_id,
        'paged' => $page,
        'order' => 'DESC',
        'orderby' => 'date',
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        locate_template('template-parts/template/news-card.php', true, false);
        // '<p>' . $page_id . '</p>';
    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// helper
function get_page_id_by_title($title)
{
$page = get_page_by_title($title);
return $page->ID;
}

?>