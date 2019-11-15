
<?php /* Template Name: About Page */ ?>

<?php 

  if(is_front_page()){
      include("header.php");
  }else{
      include("header-secondary.php");
  } 
  
?>

<!-- Header Right -->
<div class="header__right">
    <div class="about">
      <h2 class="about__heading"><?php the_title(); ?></h2>
      <?php 
          while(have_posts()){
            the_post(); ?>
               <img class="about__img" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_author() ?>" />
          <?php }
        ?>
     <div class="about__paragraph about__paragraph--first"><?php the_content(); ?></div>
    </div>
  </div>
  <!-- #Header Right -->
  </header>
  <!-- #Header -->


<?php get_footer() ?>