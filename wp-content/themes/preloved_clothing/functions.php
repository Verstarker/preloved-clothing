<?php
/**
 * underscores_demo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores_demo
 */

if ( ! function_exists( 'underscores_demo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function underscores_demo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on underscores_demo, use a find and replace
		 * to change 'underscores_demo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'underscores_demo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'underscores_demo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'underscores_demo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-logo' );
	}
endif;
add_action( 'after_setup_theme', 'underscores_demo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscores_demo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'underscores_demo_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscores_demo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscores_demo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underscores_demo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'underscores_demo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'underscores_demo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscores_demo_scripts() {
	wp_enqueue_style( 'underscores_demo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'underscores_demo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'underscores_demo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function my_custom_styles() {
	// Register my custom stylesheet
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
	// Load my custom stylesheet
	wp_enqueue_style('style');
}

function preloved_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'preloved_custom_logo_setup' );

function preloved_customizer_register($wp_customize)
{

//------Home------\\
	//About Text 1
	$wp_customize->add_section('preloved_home_section',
		array(
			'title' => __('Home'),
			'priority' => 30
		));


	$wp_customize->add_section('section',array(
		'title'=>'section',
		'priority'=>10,
		'panel'=>'some_panel',
	));

	$wp_customize->add_setting('setting_demo',array(
		'defaule'=>'a',
	));


	$wp_customize->add_control('contrl_demo',array(
		'label'=>'Text',
		'type'=>'text',
		'section'=>'section',
		'settings'=>'setting_demo',
	));




	$wp_customize->add_setting('preloved_home_text', array());
	$wp_customize->add_section('preloved_hero_section',
		array(
			'title' => __('Hero Section'),
			'section' => 'preloved_home_section',
			'priority' => 30
		)
	);

	//Home Main Heading
	$wp_customize->add_setting('preloved_home_main_heading', array());
	$wp_customize->add_control('preloved_home_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Main Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_main_heading'
		)
	);

	//Home Main Text
	$wp_customize->add_setting('preloved_home_main_text', array());
	$wp_customize->add_control('preloved_home_text_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Main Text'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_main_text'
		)
	);

	//Home Textbox Heading 1
	$wp_customize->add_setting('preloved_home_textbox1_heading', array());
	$wp_customize->add_control('preloved_home_textbox1_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Textbox 1 Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox1_heading'
		)
	);

	//Home Textbox 1
	$wp_customize->add_setting('preloved_home_textbox1', array());
	$wp_customize->add_control('preloved_home_textbox1_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Textbox 1'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox1'
		)
	);

	//Home Textbox Heading 2
	$wp_customize->add_setting('preloved_home_textbox2_heading', array());
	$wp_customize->add_control('preloved_home_textbox2_heading_ctrl',
		array(
			'type' => 'text',
			'label' => __('Home Textbox 2 Heading'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox2_heading'
		)
	);

	//Home Textbox 2
	$wp_customize->add_setting('preloved_home_textbox2', array());
	$wp_customize->add_control('preloved_home_textbox2_ctrl',
		array(
			'type' => 'textarea',
			'label' => __('Home Textbox 2'),
			'section' => 'preloved_home_section',
			'settings' => 'preloved_home_textbox2'
		)
	);

	//Home Image
	$wp_customize->add_setting('preloved_home_textbox1_image', array());
	$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'preloved_home_textbox_image_ctrl',
			array(
				'section' => 'preloved_home_section',
				'label' => __('Home Textbox1 Image'),
				'settings' => 'preloved_home_textbox1_image'
			)
		)
	);

	//Home Image2
	$wp_customize->add_setting('preloved_home_textbox2_image', array());
	$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize,
			'preloved_home_image2_ctrl',
			array(
				'section' => 'preloved_home_section',
				'label' => __('Home Textbox2 Image'),
				'settings' => 'preloved_home_textbox2_image'
			)
		)
	);

}

add_action('customize_register','preloved_customizer_register','panel');



add_action('wp_enqueue_scripts', 'my_custom_styles');

add_action( 'wp_enqueue_scripts', 'underscores_demo_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
