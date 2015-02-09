<?php
/**
 * Twiggy initial setup and constants
 */
function twiggy_setup() {

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'twiggy'),
    'footer_navigation'  => __('Footer Navigation', 'twiggy')
  ));

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', array('caption'));
}
add_action('after_setup_theme', 'twiggy_setup');

/**
 * Register sidebars
 */
function twiggy_widgets_init() {
  register_sidebar(array(
    'name'          => __('Primary', 'twiggy'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'twiggy_widgets_init');
