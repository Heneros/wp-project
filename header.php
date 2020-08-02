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

          <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/') ?>">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 

              <li <?php if(is_page('our-products') or wp_get_post_parent_id(0) == 10 ) echo 'class="nav-item active"'?>>
                <a class="nav-link" href="<?php echo site_url('/our-products'); ?>">
                Our Products
                <span class="sr-only">(current)</span>
              </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Contact Us</a>
              </li>
            </ul> 
          </div>
        </div>
      </nav>
    </header>