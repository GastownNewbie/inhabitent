<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus()
{
	remove_submenu_page('themes.php', 'theme-editor.php');
	remove_submenu_page('plugins.php', 'plugin-editor.php');
}
add_action('admin_menu', 'inhabitent_remove_submenus', 110);

function inhabitent_login_logo()
{
	echo '<style type="text/css">                                                                   
		h1 a {background-image:url(' . get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg) !important; 
		background-size: contain !important; width: 300px !important; height: 53px;}                            
		</style>';
}

add_action('login_head', 'inhabitent_login_logo');

function inhabitent_login_logo_url($url)
{
	return home_url();
}
add_filter('login_headerurl', 'inhabitent_login_logo_url');

function inhabitent_body_class_for_pages($classes)
{
	if (is_singular('page')) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}
	return $classes;
}
add_filter('body_class', 'inhabitent_body_class_for_pages');

/*  number of posts to show on archive product page*/

function number_of_product_per_page($query)
{
	if (is_post_type_archive('product')) {
		$query->set('posts_per_page', 16);
		return;
	}
}

add_action('pre_get_posts', 'number_of_product_per_page');

/* remove label eat sleep wear do archives */
function my_theme_archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'my_theme_archive_title');
