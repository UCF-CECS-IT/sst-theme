<?php
namespace SST\Theme;

define( 'SST_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once SST_THEME_DIR . 'includes/activate.php';
include_once SST_THEME_DIR . 'includes/config.php';
include_once SST_THEME_DIR . 'includes/meta.php';

// Add other includes to this file as needed.
remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');
