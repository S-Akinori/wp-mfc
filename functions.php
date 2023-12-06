<?php
include TEMPLATEPATH . '/functions/generate-upload-image-tag.php';
include TEMPLATEPATH . '/functions/custom_breadcrumbs.php';
include TEMPLATEPATH . '/settings/custom-post-type.php';
include TEMPLATEPATH . '/settings/company-settings.php';

add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );

// function theme_slug_setup() {
//   add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'theme_slug_setup' );