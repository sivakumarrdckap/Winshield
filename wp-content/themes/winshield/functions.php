<?php

function load_stylesheet()
{
	wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('masterslider' , get_template_directory_uri() . '/css/masterslider/style/masterslider.css', array(), 1, 'all');
	wp_enqueue_style('masterslider');

	wp_register_style('mastersliderskin' , get_template_directory_uri() . '/css/masterslider/skins/default/style.css', array(), 1, 'all');
	wp_enqueue_style('mastersliderskin');

	wp_register_style('mastersliderstyle' , get_template_directory_uri() . '/masterslider/style/ms-caro3d.css', array(), 1, 'all');
	wp_enqueue_style('mastersliderstyle');

	wp_register_style('mainstyle' , get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
	wp_enqueue_style('mainstyle');

	wp_register_style('slick' , get_template_directory_uri() . '/css/slick.css', array(), 1, 'all');
	wp_enqueue_style('slick');
	
	wp_register_style('responsive' , get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
	wp_enqueue_style('responsive');

}

add_action('wp_enqueue_scripts' , 'load_stylesheet');


function addjs()
{
	wp_register_script('jquery' , get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery');

	wp_register_script('popper' , get_template_directory_uri() . '/js/popper.min.js', array(), 1, 1, 1);
	wp_enqueue_script('popper');

	wp_register_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrap');

	wp_register_script('mCustomScrollbar' , get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), 1, 1, 1);
	wp_enqueue_script('mCustomScrollbar');

	wp_register_script('fancybox' , get_template_directory_uri() . '/js/jquery.fancybox.js', array(), 1, 1, 1);
	wp_enqueue_script('fancybox');

	wp_register_script('appear' , get_template_directory_uri() . '/js/appear.js', array(), 1, 1, 1);
	wp_enqueue_script('appear');

	wp_register_script('owl' , get_template_directory_uri() . '/js/owl.js', array(), 1, 1, 1);
	wp_enqueue_script('owl');

	wp_register_script('wow' , get_template_directory_uri() . '/js/wow.js', array(), 1, 1, 1);
	wp_enqueue_script('wow');

	wp_register_script('slick' , get_template_directory_uri() . '/js/slick.js', array(), 1, 1, 1);
	wp_enqueue_script('slick');

	wp_register_script('jqueryui' , get_template_directory_uri() . '/js/jquery-ui.js', array(), 1, 1, 1);
	wp_enqueue_script('jqueryui');

	wp_register_script('easing' , get_template_directory_uri() . '/js/masterslider/jquery.easing.min.js', array(), 1, 1, 1);
	wp_enqueue_script('easing');

	wp_register_script('masterslider' , get_template_directory_uri() . '/js/masterslider/masterslider.min.js', array(),  1, 1, 1);
	wp_enqueue_script('masterslider');

	wp_register_script('jscript' , get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
	wp_enqueue_script('jscript');

	wp_register_script('gmaps' , get_template_directory_uri() . '/js/gmaps.js', array(), 1, 1, 1);
	wp_enqueue_script('gmaps');

	wp_register_script('mapscript' , get_template_directory_uri() . '/js/map-script.js', array(), 1, 1, 1);
	wp_enqueue_script('mapscript');
}
add_action('wp_enqueue_scripts', 'addjs');


// custome menu
add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu' , 'theme'),
	)
);

