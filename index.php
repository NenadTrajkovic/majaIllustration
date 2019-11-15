
<?php 
  if(is_front_page()){
      include("header.php");
  }else{
      include("header-category.php");
  } 
?>

<main class="collections">
<?php 
    $homePagePosts = new WP_Query(array(
      'nopaging' => true
      //"posts_per_page" => 2
    ));
    while($homePagePosts->have_posts()){
      $homePagePosts->the_post(); ?> 
  <div class="collections__illustration">
        <div style="width: 100%; height: auto; float: left;">
          <div style="width: 100%; height: auto; float: left;">
            <h1 style="text-align: center; margin: .5em 0 1em 0;"><a style="text-decoration: none; color: black;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <a style="width: 100%; height: auto; display: block;" href="<?php the_permalink(); ?>">        
              <img style="width: 100%; height: auto;" src="<?php echo get_the_post_thumbnail_url (); ?>">
            </a>
          </div>
        </div>
        <div style="width: 30%; height: auto; float: left;">
        </div>
    </div>
  <?php } wp_reset_postdata();
  ?>
</main>
<!--  #Collections -->

<?php get_footer() ?>