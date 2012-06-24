<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

add_action( 'after_setup_theme', 'regMyMenus' );


function regMyMenus() {
// This theme uses wp_nav_menu() in four locations.
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'regMyMenus' ),
	) );
}

$content_width = 450;

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
} 



add_filter('the_content', 'prettyPhoto', 12);
add_filter('get_comment_text', 'prettyPhoto');
function prettyPhoto ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="prettyPhoto['.$post->ID.']"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}



?>
