<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on _s, use a find and replace
   * to change '_s' to the name of your theme in all the template files.
   */
  load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
    'primary' => esc_html__( 'Primary', '_s' ),
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
  add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
  $GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', '_s' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', '_s' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
  wp_enqueue_style( '_s-style', get_stylesheet_uri() );

 /* Add vendor scripts */
 wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/vendor/modernizr-custom.js', array(), 1.1, true );

 /* Add custom scripts */
  wp_enqueue_script( 'join-the-mailing-list', get_template_directory_uri() . '/js/join-the-mailing-list.js', array ( 'jquery' ), 1.1, false);
  wp_enqueue_script( 'position-vw-divs', get_template_directory_uri() . '/js/position-vw-divs.js', array(), 1.1, true );
  wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), 1.1, true );
  wp_enqueue_script( 'css-fallbacks', get_template_directory_uri() . '/js/css-fallbacks.js', array(), 1.1, true );
  wp_enqueue_script( 'links', get_template_directory_uri() . '/js/links.js', array(), 1.1, true );
  wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/***
* Add custom project page type for DHREES
***/

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'dhrees-project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
      'show_in_nav_menus' => true,
      'hierarchical' => true
    )
  );
  register_post_type( 'dhrees-event',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'show_in_nav_menus' => true
    )
  );
  register_post_type( 'dhrees-team-member',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'show_in_nav_menus' => true
    )
  );
  register_post_type( 'dhrees-resource',
    array(
      'labels' => array(
        'name' => __( 'Resources' ),
        'singular_name' => __( 'Resource' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'show_in_nav_menus' => true
    )
  );
  register_post_type( 'dhrees-news',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News Item' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'show_in_nav_menus' => true
    )
  );
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
