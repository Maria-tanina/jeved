<?php


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


function jeved_setup() {
	/*
		* Make theme available for translation.
		*/
	load_theme_textdomain( 'jeved', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu' => esc_html__( 'Header menu', 'jeved' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'jeved_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Add support for core custom logo.
	*/
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'jeved_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
function jeved_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jeved_content_width', 640 );
}
add_action( 'after_setup_theme', 'jeved_content_width', 0 );


/* Add svg*/
add_filter( 'upload_mimes', 'svg_upload_allow' );


function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}
	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


/**
 * Enqueue scripts and styles.
 */
function jeved_styles() {
	wp_enqueue_style( 'libs-style', get_template_directory_uri() . '/assets/css/libs.min.css', array());
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.min.css', array());
}
add_action( 'wp_enqueue_scripts', 'jeved_styles' );
function jeved_scripts() {
wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'jeved_scripts' );


/*
add classes to <li>
*/ 
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



function jeved_register_post_type_banner()
{

    $args = [
        'label' => esc_html__('Banner', 'jeved'),
        'public' => true,
        'show_in_menu' => true,
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'rewrite' => false,
		'has_archive' => false,
		'hierarchical' => false
    ];
    register_post_type('banner', $args);
}
add_action('init', 'jeved_register_post_type_banner');


function jeved_register_post_type_villas()
{
	$labels = array(
        'name'              => esc_html_x('Categories', 'taxonomy general name'),
        'singular_name'     => esc_html_x('Category', 'taxonomy singular name'),
        'search_items'      => esc_html__('Search Categories'),
        'all_items'         => esc_html__('All Categories'),
        'parent_item'       => esc_html__('Parent Category'),
        'parent_item_colon' => esc_html__('Parent Category:'),
        'edit_item'         => esc_html__('Edit Category'),
        'update_item'       => esc_html__('Update Category'),
        'add_new_item'      => esc_html__('Add New Category'),
        'new_item_name'     => esc_html__('New Category Name'),
        'menu_name'         => esc_html__('Categories'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categories'),
    );
    register_taxonomy('categories', array('villas'), $args);
    unset($args);
    unset($labels);

    $args = [
        'label' => esc_html__('Villa', 'jeved'),
		'labels' => array(
			'name' => 'Villas',
			'singular_name' => 'Villa',
			'menu_name' => 'Villas'
		),
        'public' => true,
        'show_in_menu' => true,
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'rewrite' => false,
		'has_archive' => false,
		'hierarchical' => false
    ];
    register_post_type('villas', $args);
}
add_action('init', 'jeved_register_post_type_villas');

function jeved_register_post_type_benefits()
{

    $args = [
        'label' => esc_html__('Benefits', 'jeved'),
        'public' => true,
        'show_in_menu' => true,
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'rewrite' => false,
		'has_archive' => false,
		'hierarchical' => false
    ];
    register_post_type('benefits', $args);
}
add_action('init', 'jeved_register_post_type_benefits');

function jeved_register_post_type_authors()
{

    $args = [
        'label' => esc_html__('Authors', 'jeved'),
        'public' => true,
        'show_in_menu' => true,
        'supports' => ['title', 'custom-fields'],
        'rewrite' => false,
		'has_archive' => false,
		'hierarchical' => false
    ];
    register_post_type('authors', $args);
}
add_action('init', 'jeved_register_post_type_authors');