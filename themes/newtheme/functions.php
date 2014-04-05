<?php
/**
 * Proper way to enqueue scripts and styles
 */
function geekhub_scripts() {
	wp_enqueue_style( 'geekhub-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'geekhub_scripts' );

register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );

add_theme_support( 'post-thumbnails' );

add_filter('post_class', 'dobavit_pervii_klass');
 
function dobavit_pervii_klass($klassi) {
    global $wp_query;
    if ($wp_query->current_post == 0) :
        $klassi[] = 'pervii';
    endif;
    return $klassi;
}
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'courses',
		array(
			'labels' => array(
				'name' => __( 'Our courses', 'slug_name' ),
				'singular_name' => __( 'courses' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'thumbnail', 'revisions' )
		)
	);
	register_post_type( 'Team',
		array(
			'labels' => array(
				'name' => __( 'Our team' ),
				'singular_name' => __( 'Team' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'editor', 'thumbnail', 'revisions', 'custom-fields' )
		)
	);
		register_post_type( 'Sponsors',
		array(
			'labels' => array(
				'name' => __( 'Our sponsors' ),
				'singular_name' => __( 'Sponsors' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array ('title', 'thumbnail', 'custom-fields' )
		)
	);
} 
if (function_exists ('register_sidebar'))
register_sidebar (array ('name' => 'Доп. поле')); 

function geekhub_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'test_geekhub' , array(
    'title'      => __( 'Head logo', 'geekhub' ),
    'priority'   => 30,
	) );
	$wp_customize->add_setting( 'logo' , array(  
    'transport'   => 'refresh',
    ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
	'label'        => __( 'logo', 'geekhub' ),
	'section'    => 'test_geekhub',
	'settings'   => 'logo',
	) ) ); 
	$wp_customize->add_section( 'soclink' , array(
    'title'      => __( 'soclink', 'geekhub' ),
    'priority'   => 30,
	) );
	$wp_customize->add_setting( 'facebook' , array(  
    'transport'   => 'refresh',
    ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
	'label'        => __( 'facebook', 'geekhub' ),
	'section'    => 'soclink',
	'settings'   => 'facebook',
	) ) ); 	
	$wp_customize->add_setting( 'vk' , array(  
    'transport'   => 'refresh',
    ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk', array(
	'label'        => __( 'vk', 'geekhub' ),
	'section'    => 'soclink',
	'settings'   => 'vk',
	) ) ); 	
	$wp_customize->add_setting( 'twitter' , array(  
    'transport'   => 'refresh',
    ) );	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
	'label'        => __( 'twitter', 'geekhub' ),
	'section'    => 'soclink',
	'settings'   => 'twitter',
	) ) );
	$wp_customize->add_setting( 'youtube' , array(  
    'transport'   => 'refresh',
    ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
	'label'        => __( 'youtube', 'geekhub' ),
	'section'    => 'soclink',
	'settings'   => 'youtube',
	) ) );
	$wp_customize->add_setting( 'vimeo' , array(  
    'transport'   => 'refresh',
    ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vimeo', array(
	'label'        => __( 'vimeo', 'geekhub' ),
	'section'    => 'soclink',
	'settings'   => 'vimeo',
	) ) );
}
add_action( 'customize_register', 'geekhub_customize_register' );

