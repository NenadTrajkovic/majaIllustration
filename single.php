
<?php 
//  Thumbnail image link, not image from post
//  <?php the_post_thumbnail( array( "medium_large", array("class" => "wp-post-image")) ); ?> <?php

if(is_front_page()){
    include("header.php");
}else{
    include("header-post.php");
} 

?>

<?php 
  while(have_posts()){
    the_post(); ?>
    
      <main class="posts">      
        <div class="posts__image">
          <?php the_content(); ?>
        </div>
      </main>  
  <?php }
?>

<?php get_footer(); ?>

