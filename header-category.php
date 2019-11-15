<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />

    <title><?php bloginfo( 'name' ); ?><?php wp_title('|', true, 'left' ); ?></title>

    <meta name="description" content="Traditional paintings with watercolours, telling little stories about childhood, nature and my cat." />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <?php wp_head(); ?> 
  </head>
<body <?php body_class(); ?> onscroll="scrollFunc()">
  <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="container">
  <div class="wrapper__collections">
    <!-- Header -->
    <header class="header__collections">
      <!-- Logo -->
      <div  class="header__collections__logo">
        <a class="header__collections__link" href="<?php echo get_home_url(); ?>">
          <img class="header__collections__img" src="<?php echo get_theme_file_uri("./images/Logo-header.png") ?>" alt="<?php the_title(); ?>" />
        </a>
      </div>
      <!-- #Logo -->
      <!-- Navigation -->
      <nav class="header__collections__nav">
      <?php
          $menuParameters = array(
            "theme_location" => "CollectionsMenu",
            "container"       => false,
            "echo"            => false,
            "items_wrap"      => '%3$s',
            "depth"           => 0,
            "walker"          => new Custom_Walker_Nav_Menu()
          );

          // no need to strip tags since the custom walker already trimmed it
          echo wp_nav_menu( $menuParameters );
        ?>
      </nav>
      <!-- #Navigation -->
    </header>
    <!-- #Header -->