<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
    global $cap, $content_width;

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		/*add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );*/

    }

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
    register_nav_menus( array(
        'primary'  => __( 'Header bottom menu', '_tk' ),
    ) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );




/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
	register_sidebar(array(
		'name' => __( 'Footer', '_tk' ),
		'before_widget' => '<div class="col-sm-4 no-pad widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
}
add_action( 'widgets_init', '_tk_widgets_init' );


	

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	/*
	 *	CSS
	 */

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );
	// font awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	// syntax css
	wp_enqueue_style( '_tk-syntax', get_template_directory_uri() . '/assets/css/syntax.css' );
	// custom css
	wp_enqueue_style( '_tk-custom', get_template_directory_uri() . '/assets/css/custom.css' );



	/*
	 *	BOOTSTRAP
	 */

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	// load skip link focus fix
	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	// comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// keyboard image navigation
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}


	/*
	 *	CUSTOM JSrespond.min.js
	 */

	wp_enqueue_script('_tk-respond', get_template_directory_uri() . '/assets/js/respond.min.js', array('jquery') );
	wp_enqueue_script('_tk-holder', get_template_directory_uri() . '/assets/js/holder.js', array('jquery') );
	wp_enqueue_script('_tk-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery') );
	wp_enqueue_script('_tk-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery') );
	wp_enqueue_script('_tk-widow-fix', get_template_directory_uri() . '/assets/js/jquery.widowFix-1.3.2.min.js', array('jquery') );
	wp_enqueue_script('_tk-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );


}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
/**
 * Load Custom Post Types file.
 */
require get_template_directory() . '/includes/custom-post-types.php';
