
<?php /* A Simple Category Template */ ?>

<?php 
  if(is_front_page()){
      include("header.php");
  }else{
      include("header-category.php");
  } 
?>


<?php if (is_category( "inspiration" )) { ?>
<!--  Collections -->
  <main class="collections">
  <?php while ( have_posts() ) : the_post(); ?>
   <!-- collections__illustration -->
    <div class="collections__illustration">
      <h1 class="archive-title"> <?php single_cat_title(); ?> </h1>
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <h1><?php echo category_description(); ?></h1>
      <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
      <a style="width: 100%; height: auto; display: block;" href="<?php the_permalink(); ?>">        
        <img class="collections__img" src="<?php echo get_the_post_thumbnail_url (); ?>" alt="<?php the_title(); ?>">
      </a>       
    </div>
    <!-- #collections__illustration -->
  <?php endwhile; ?>      
  </main>
  <!--  #Collections -->
<?php } elseif (is_category( "just-maja" )) { ?>
   <main class="collections">
   <?php while ( have_posts() ) : the_post(); ?>
     <div class="collections__illustration">
       <h1 class="archive-title"> <?php single_cat_title(); ?> </h1>
       <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <h1><?php echo category_description(); ?></h1>
       <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
       <a style="width: 100%; height: auto; display: block;" href="<?php the_permalink(); ?>">        
         <img class="collections__img" src="<?php echo get_the_post_thumbnail_url (); ?>" alt="<?php the_title(); ?>">
       </a>       
     </div>
     <!-- #collections__illustration -->
   <?php endwhile; ?>      
   </main>
   <!--  #Collections -->
  <?php } elseif (is_category( "realwoman" )) { ?>
    <main class="collections">
    <?php while ( have_posts() ) : the_post(); ?>
     <div class="collections__illustration">
       <h1 class="archive-title"> <?php single_cat_title(); ?> </h1>
       <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <h1><?php echo category_description(); ?></h1>
       <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
       <a style="width: 100%; height: auto; display: block;" href="<?php the_permalink(); ?>">        
         <img class="collections__img" src="<?php echo get_the_post_thumbnail_url (); ?>" alt="<?php the_title(); ?>">
       </a>       
     </div>
     <!-- #collections__illustration -->
   <?php endwhile; ?>      
   </main>
   <!--  #Collections -->
<?php } elseif (is_category( "seasongreetings" )) { ?>
  <main class="collections">
    <?php while ( have_posts() ) : the_post(); ?>
     <div class="collections__illustration">
       <h1 class="archive-title"> <?php single_cat_title(); ?> </h1>
       <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <h1><?php echo category_description(); ?></h1>
       <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
       <a style="width: 100%; height: auto; display: block;" href="<?php the_permalink(); ?>">        
         <img class="collections__img" src="<?php echo get_the_post_thumbnail_url (); ?>" alt="<?php the_title(); ?>">
       </a>       
     </div>
     <!-- #collections__illustration -->
   <?php endwhile; ?>      
   </main>
   <!--  #Collections -->
<?php } else { ?>
<!--  Collections -->
<main class="collections">
  <div class="collections__illustration">
    <h1>This category does not exists...</h1>
  </div>
</main>
<?php } ?>
<!--                 --> 

<?php get_footer() ?>