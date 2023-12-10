<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:locale" content="ja_JP" />
  <link rel="icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="c-container">
      <nav id="navbar">
        <div class="logo"><img src="<?= get_template_directory_uri() ?>/assets/images/navi_img_logo.webp"></div>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header',
          'menu_id'        => 'primary-menu',
          'menu_class'     => 'p-gnav__links',
        ));
        ?>
        <div class="hamburger">
          <span class="material-symbols-outlined">
            menu
          </span>
        </div>
      </nav>
    </div>
  </header>
  <div class="header-overlay"></div>
  <div class="sp-nav-container">
    <div class="nav-close-icon">
      <span class="material-symbols-outlined">
        close
      </span>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'p-gnav__links',
      ));
      ?>
    </nav>
  </div>
  <main>