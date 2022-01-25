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

?>