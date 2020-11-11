<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container"> 
          <a class="navbar-brand" href="<?php  echo site_url();?>"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php

            wp_nav_menu([
              'menu' => 'menu-header',
              'container' => false,
              'menu_class' => 'navbar-nav ml-auto',
              'echo' => true,
              // 'fallback_cb' => 'wp_page_menu',
              'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
              'depth' => 1,
              'add_li_class' => 'nav-item'

            ]);

 
            ?>
          <ul class="navbar-nav ml-auto">

            </ul> 
          </div>
        </div>
      </nav>
    </header>