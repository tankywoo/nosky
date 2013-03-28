<?php

// This theme allows users to set a custom background
add_custom_background();

if ( function_exists('register_sidebar') )
    register_sidebar();

if(function_exists('register_nav_menus')){
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'nosky'),
		'second' => __('Second Navigation', 'nosky'),
	));
}


function my_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter('wp_page_menu_args', 'my_page_menu_args');





if(function_exists('register_sidebar_widget')){
	wp_register_sidebar_widget('wtq', '站点', 'site_info');
}

function site_info(){include(TEMPLATEPATH.'/siteinfo.php');}
function tab3(){include(TEMPLATEPATH.'/func/r_tab.php');}
//function foo(){include(TEMPLATEPATH.'/func/Foo.php');}

	 
//require_once(TEMPLATEPATH . '/func/Foo.php');
require_once(TEMPLATEPATH. '/func/siteinfo.php');
require_once(TEMPLATEPATH. '/func/r_tab.php');

require_once(TEMPLATEPATH . '/func/statistics.php');
require_once(TEMPLATEPATH . '/func/settings.php');
require_once(TEMPLATEPATH . '/func/setcolor.php');

?>