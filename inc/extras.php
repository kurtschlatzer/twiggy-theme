<?php

/**
 * Clean up the_excerpt()
 */
function twiggy_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'twiggy') . '</a>';
}
add_filter('excerpt_more', 'twiggy_excerpt_more');

/**
 * Manage output of wp_title()
 */
function twiggy_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'twiggy_wp_title', 10);


