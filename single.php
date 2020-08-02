<?php 
get_header();

while(have_posts()){

the_post(); ?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
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

          </div>
</div>
<?php }


    get_footer();
?>

