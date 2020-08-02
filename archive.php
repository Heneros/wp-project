<?php get_header();?>
<!-- Page Content -->
<div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><?php the_title(); ?></h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="<?php echo site_url('/our-products')?>">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
      <?php
      while(have_posts()){
        the_post(); ?>
        <div class="col-md-4">
            <div class="product-item">
            <a href="<?php echo the_permalink();?>"><img src="<?php echo get_theme_file_uri('/img/product_01.jpg'); ?>" alt=""></a>
              <div class="down-content">
                <a href="#!"><h4><?php the_title(); ?></h4></a>
                <h6>$25.75</h6>
                <?php the_content();?> 
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
<?php }
      ?>
     </div>
      </div>
    </div>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<?php get_footer(); ?>