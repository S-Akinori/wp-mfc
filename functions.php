<?php
include TEMPLATEPATH . '/functions/generate-upload-image-tag.php';
include TEMPLATEPATH . '/functions/custom_breadcrumbs.php';
include TEMPLATEPATH . '/settings/custom-post-type.php';
include TEMPLATEPATH . '/settings/company-settings.php';

add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );

function mytheme_setup() {
    // ナビゲーションメニューをサポート
    register_nav_menus(array(
        'header' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー'
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


// function theme_slug_setup() {
//   add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'theme_slug_setup' );