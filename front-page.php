
<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

  <!-- Header Right -->
  <div class="header__right">
    <div class="hero">
      <img class="hero__img" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo("title") ); ?>" />
    </div>
  </div>
  <!-- #Header Right -->
</header>
<!-- #Header -->

<!-- Main -->
    <div class="main">
      <div class="posts"> <?php
      // The Query
      $the_query = new WP_Query( 'posts_per_page=4&order=DESC' );
      // The Loop
      if ( $the_query->have_posts() ) {
        ?> <?php
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?> <a class="posts__link" href="<?php the_permalink(); ?>">        
                <img class="posts__link--img" src="<?php echo get_the_post_thumbnail_url (); ?>">
              </a>
        <?php  } ?>
      </div> 
    </div>  
  <?php
  } else {
      // no posts found
  }
  /* Restore original Post Data */
  wp_reset_postdata();
  ?>
<!-- #Main -->

<!-- Instafeed -->
<aside class="instafeed">
  <?php echo do_shortcode("[instagram-feed num=4 cols=4 showfollow=false]"); ?> 
</aside>
<!-- #Instafeed -->

<?php get_footer(); ?>