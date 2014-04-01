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
	register_post_type( 'Нашi курси',
		array(
			'labels' => array(
				'name' => __( 'Нашi курси' ),
				'singular_name' => __( 'Нашi курси' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
} 
if(function_exists('register_sidebar')){
register_sidebar(); // региструем сайдбар
}


function geekhub_customize_register( $wp_customize ) {
   $wp_customize->add_setting( 'header_textcolor' , array(
    'default'     => '#000000',
    'transport'   => 'refresh',
) );
$wp_customize->add_section( 'test_geekhub' , array(
    'title'      => __( 'Test Geekhub', 'geekhub' ),
    'priority'   => 30,
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'        => __( 'Header Color', 'geekhub' ),
	'section'    => 'test_geekhub',
	'settings'   => 'header_textcolor',
) ) );
}
add_action( 'customize_register', 'geekhub_customize_register' );