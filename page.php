


  <h1><a href="<?php echo site_url(); ?>">home</a></h1>


  <?php 
    while(have_posts()){
      the_post(); ?>
      <h2>Page file.php</h2>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    <?php }
  ?>

