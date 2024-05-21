<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Italiana&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="page" class="site">

    <header>
      <div class="container">
        <div class="navbar-head">
          <div class="logo">
            <?php the_custom_logo() ?>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <div class="animate-burger">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
            </div>
          </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar">

          <?php
          wp_nav_menu(
            array(
              'menu' => 'Main nav',
              'container' => '',
              'menu_class' => 'nav navbar-nav'
            )
          );
          ?>
        </div>
      </div>
    </header>

    <div id="content" class="site-content">