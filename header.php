<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />

    <title><?php bloginfo("name"); ?><?php wp_title('|', true, 'left' ); ?></title>

    <meta name="description" content="Traditional paintings with watercolours, telling little stories about childhood, nature and my cat." />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <?php wp_head(); ?> 
  </head>
<body <?php body_class(); ?>>
  <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="container">
  <div class="wrapper">
    <header class="header">
      <!-- Header Left -->
      <div class="header__left">
        <!-- Logo -->
        <h1 class="logo">        
          <?php the_custom_logo(); ?>      
        </h1>
        <!-- #Logo .header .custom-logo wp-->
        <!-- Navigation -->
        <nav class="navigation">
        <?php
          $menuParameters = array(
            "theme_location" => "MainMenu",
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
        <nav class="navigation__small">
        <?php
          $menuParameters = array(
            "theme_location" => "HamburgerMenu",
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
        <div class="hamburger__menu">
          <i class="fa fa-bars"></i>
        </div>
        <!-- #Navigation -->
      </div>
      <!-- #Header Left -->

     