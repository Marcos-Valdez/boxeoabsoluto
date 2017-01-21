<?php

if ( ! function_exists( 'dos_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function dos_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'portrait', 700,350, true );
    add_image_size( 'portrait-post', 700,350, true );

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'header-menu'   => __( 'header', 'dos' ),
        'secondary' => __('footer', 'dos' )
    ) );
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'chat', 'link', 'status', 'audio', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'dos_setup' );


function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/font.css');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<ol><li class="widget %2$s">',
        'after_widget'  => '</li></ol>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'footer', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ol><li class="widget %2$s">',
        'after_widget'  => '</li></ol>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'themename_widgets_init' );


    /*==================================================
    Custom Header
    ===================================================*/

    $args = array(
    'flex-width'    => true,
    'width'         => 300,
    'flex-height'   => true,
    'height'        => 150,
    'default-image' => get_template_directory_uri() . 'img/boxeoabsoluto.svg',
);
add_theme_support( 'custom-header', $args );
