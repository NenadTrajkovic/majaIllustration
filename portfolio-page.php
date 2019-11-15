
<?php /* Template Name: Portfolio Page */ ?>

<?php 

  if(is_front_page()){
      include("header.php");
  }else{
      include("header-secondary.php");
  } 
  
?>

<!-- Header Right -->
<div class="header__right">
      <!-- Portfolio -->
      <div class="portfolio">
        <!-- Portfolio Collections -->
        <div class="portfolio__collection">
          <h2 class="portfolio__collection__heading">inspiration</h2>
          <a class="portfolio__collection--link" href="<?php echo site_url("/category/inspiration/") ?>">
            <img class="portfolio__collection__img" src="<?php echo get_theme_file_uri("/images/kolekcije/inspiration/fridak.jpg"); ?>" alt="portfolio" />    
          </a>
        </div>
        <div class="portfolio__collection">
          <h2 class="portfolio__collection__heading">just maja</h2>
          <a class="portfolio__collection--link" href="<?php echo site_url("/category/just-maja/") ?>">
            <img class="portfolio__collection__img" src="<?php echo get_theme_file_uri("./images/kolekcije/inspiration/janewhite.jpg"); ?>" alt="portfolio" />
          </a>
        </div>
        <div class="portfolio__collection">
          <h2 class="portfolio__collection__heading">real women</h2>
          <a class="portfolio__collection--link" href="<?php echo site_url("/category/realwoman/") ?>">
            <img class="portfolio__collection__img" src="<?php echo get_theme_file_uri("./images/kolekcije/inspiration/beatrix.jpg"); ?>" alt="portfolio" />
          </a>
        </div>
        <div class="portfolio__collection">
          <h2 class="portfolio__collection__heading">season greetings</h2>
          <a class="portfolio__collection--link" href="<?php echo site_url("/category/seasongreetings/") ?>">
            <img class="portfolio__collection__img" src="<?php echo get_theme_file_uri("./images/kolekcije/seasonGreetengs/easter.jpg"); ?>" alt="portfolio" />
          </a>
        </div>
        <!-- #Portfolio Collections -->
        
        <!-- Portfolio paragraph -->
        <p class="portfolio__collection__paragraph">These collections tell stories about childhood, pets, love and friendship. They are inspired by real women through history and female fictional characters in art.</p>
      </div>
      <!-- #Portfolio paragraph -->
      <!-- #Portfolio -->
    </div>
    <!-- #Header Right -->
  </header>
  <!-- #Header -->

<?php get_footer() ?>