<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
			'footer' => __( 'Footer Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );

	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );


/*
    ==========================================
    Include files
    ==========================================
*/

require get_template_directory() . '/inc/gb-blocks.php';



/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_style('GoogleFonts-Poppins', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"', 'all');
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('OwlCarousel', get_template_directory_uri() . '/assets/owlcarousel/css/owl.carousel.min.css' );
	wp_enqueue_style('OwlCarouselTheme', get_template_directory_uri() . '/assets/owlcarousel/css/owl.theme.default.css' );
	wp_enqueue_style('styleCSS', get_template_directory_uri() . '/style.css' );


	// Js

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'OwlCarouseljs', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), true );

}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}


// Our custom post type function


function create_posttype() {
    register_post_type( 'services',

        array(

            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),

            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array('slug' => 'services'),
            'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')
        )
    );
}

add_action( 'init', 'create_posttype' );


add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


function webify_widgets_init() {

	// Social Icon

	register_sidebar(
		array(	
			'name'	=> 'Sidebars',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Social widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

	// Footer About links

	register_sidebar( array(
		'name'          => __( 'Footer About links', '' ),
		'id'            => 'footer-col1',
		'description'   => __( 'Add widgets here to appear in your footer area column 1', '' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-42 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><div></div>',
	) );
	
	// Footer services

	register_sidebar( array(
		'name'          => __( 'Footer Col services', '' ),
		'id'            => 'footer-col-s',
		'description'   => __( 'Add widgets here to appear in your footer area column 3', '' ),
		'before_widget' => '<aside id="%1$s" class="widget mb-42 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><div></div>',
	) );


	// Copy right text

	register_sidebar( array(
		'name' => __( 'copyright Widget Area', 'webify' ),
		'id' => 'copyright-widget-area',
		'description' => __( 'The copyright widget area', 'webify' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'webify_widgets_init' );

?>