<?php

	
	function laundry_theme_support(){

		add_theme_support( 'post-thumbnails' );


		register_nav_menus( array(
			'primary_menu'		=> __( 'Primary Menu', 'laundry' ),
			'footer_menu'		=> __( 'Footer Menu', 'lanudry' )
		) );
	}
	add_action('after_setup_theme', 'laundry_theme_support');


function laundry_assets(){



	wp_enqueue_style( 'main', get_stylesheet_uri()  );

}
add_action('wp_enqueue_scripts', 'laundry_assets');



function laundry_custom_posts(){

	//services custom post type

	register_post_type('services', array(
		'labels'		=> array(
			'name'		=> __( 'Services', 'laundry' ),
			'singular_name'      => __( 'Service', 'laundry' ),
			'add_new'            => __( 'Add New Service', 'laundry' ),
			'add_new_item'       => __( 'Add New Service', 'laundry' ),
			'edit_item'          => __( 'Edit Service', 'laundry' ),
			'new_item'           => __( 'New Service', 'laundry' ),
			'view_item'          => __( 'View Service', 'laundry' ),
			'search_items'       => __( 'Search Services', 'laundry' ),
			'not_found'          => __( 'No Services found', 'laundry' ),
			'not_found_in_trash' => __( 'No Services found in Trash', 'laundry' ),
			'parent_item_colon'  => __( 'Parent Service:', 'laundry' ),
			'menu_name'          => __( 'Services', 'laundry' ),
		),
		'public'		=> true, 
		'supports'		=> array(
			'title', 
			'editor', 
			'thumbnail'
		), 
		'menu_icon'				=> 'dashicons-hammer'

	));


	//testimonial custom post type

	register_post_type('testimonial', array(
		'labels'		=> array(
			'name'		=> __( 'Testimonials', 'laundry' ),
			'singular_name'      => __( 'Testimonial', 'laundry' ),
			'add_new'            => __( 'Add New testimonial', 'laundry' ),
			'add_new_item'       => __( 'Add New testimonial', 'laundry' ),
			'edit_item'          => __( 'Edit testimonial', 'laundry' ),
			'new_item'           => __( 'New testimonial', 'laundry' ),
			'view_item'          => __( 'View testimonial', 'laundry' ),
			'search_items'       => __( 'Search testimonials', 'laundry' ),
			'not_found'          => __( 'No testimonials found', 'laundry' ),
			'not_found_in_trash' => __( 'No testimoniala found in Trash', 'laundry' ),
			'parent_item_colon'  => __( 'Parent testimonial:', 'laundry' ),
			'menu_name'          => __( 'Testimonials', 'laundry' ),
		),
		'public'		=> true, 
		'supports'		=> array(
			'title', 
			'editor', 
			'thumbnail'
		), 
		'menu_icon'				=> 'dashicons-testimonial'

	));


}

add_action('init', 'laundry_custom_posts');


function laundry_theme_widgets(){


	register_sidebar(array(
		'name'		=> __( 'Footer widget One', 'laundry' ), 
		'id'		=>'footer-one', 
		'description'	=> 'This is a widget for footer one. ', 
		'before_widget'	=> '<div id="%1" class="single-footer-caption mb-50"><div class="footer-logo',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<div class="footer-tittle"><div class="footer-pera">', 
		'after_title'	=> '</div></div>'
	));
	

	register_sidebar(array(
		'name'		=> __( 'Footer widget two', 'laundry' ), 
		'id'		=>'footer-two', 
		'description'	=> 'This is a widget for footer two. ', 
		'before_widget'	=> '<div id="%1" class="single-footer-caption mb-50">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="footer-tittle"><h4>', 
		'after_title'	=> '</h4></div>'
	));
	

	register_sidebar(array(
		'name'		=> __( 'Footer widget three', 'laundry' ), 
		'id'		=>'footer-three', 
		'description'	=> 'This is a widget for footer three. ', 
		'before_widget'	=> '<div id="%1" class="single-footer-caption mb-50">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="footer-tittle"><h4>', 
		'after_title'	=> '</h4></div>'
	));
	

}
add_action('widgets_init', 'laundry_theme_widgets');




//link redux framework page

include_once('inc/redux/ReduxCore/framework.php');
include_once('inc/redux/laundry-config.php');