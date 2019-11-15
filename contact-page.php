
<?php /* Template Name: Contact Page */ ?>

<?php 

  if(is_front_page()){
      include("header.php");
  }else{
      include("header-secondary.php");
  } 
  
?>

 <!-- Header Right -->
 <div class="header__right">
      <div class="contact">
        <h2 class="contact__heading">Contact me</h2>
        <p class="contact__message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum laoreet hendrerit. Sed vitae libero nec magna dictum venenatis nec ac massa.</p>
  
        <!-- TODO: Replace action value with a PHP script file 
        <form name="maja_contact" action="<?php // echo  get_permalink("./form.php"); ?>" method="post" class="contact__form" id="contact-form" novalidate>
          <div class="contact__form__control">
            <label for="contact-email">Your email</label>
            <input type="email" id="contact-email" required name="contact-email" class="form__input">
          </div>
  
          <div class="contact__form__control">
            <label for="contact-message">Leave a message</label>
            <textarea name="contact-message" required id="contact-message" cols="30" rows="10"></textarea>
          </div>
  
          <button class="contact__button">Send your message</button>
        </form>
        -->

        <?php echo do_shortcode('[wpforms id="153" title="false" description="false"]') ?>


      </div>
    </div>
    <!-- #Header Right -->
  </header>
  <!-- #Header -->

<?php get_footer() ?>