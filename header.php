<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width"/>
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="all">
      <header>
        <img class="logo" src="<?php header_image(); ?>"
        height="<?php echo get_custom_header()->height; ?>"
        width="<?php echo get_custom_header()->width; ?>"
        alt="" />

        <nav>
          <?php wp_nav_menu( array('theme_location => header-menu') ); ?>
        </nav>
      </header>
