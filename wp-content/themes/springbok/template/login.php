<?php
/**
 * Template Name: login 
 */
get_header();
global $error;
$error = new WP_Error();
$post_id= get_the_id();
?>
  <!-- single-page-banner start -->
    <section class="single-page-banner" style="<?=get_field('banner_image',$post_id)?>">
      <div class="single-banner-content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="single-banner-content">
                <h2 class="single-banner-title"><?=get_field('banner_text',$post_id)?></h2>
                <ul class="page-list">
                    <li><a href="<?= site_url();?>">Home</a></li>
                    <li><?=get_field('banner_text',$post_id)?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- single-page-banner end  -->


  <!-- success-story-section start -->
  <section class="success-story-section loginPage">
    <div class="container">
      <form class="loginform pt-5 pb-5 login_single" action="">
        <div class="form-group">
          <label for="">Enter Email :</label>
          <input type="text" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="">Enter Password:</label>
          <input type="password" class="form-control" required="">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="col-selector">
              <button type="submit" class="btn btn-warning">Login</button>
            </div>
          </div>
          <div class="col-6">
            <div class="col-selector">
              <p class="text-right">Don't Have An Account? <a href="<?php echo site_url(); ?>/register">Register</a></p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- success-story-section end -->

<?php 
get_footer();
?>
