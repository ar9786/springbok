<?php
/**
 * Template Name: About Us 
 */
get_header();
global $error;
$error = new WP_Error();
$post_id= get_the_id();
?>
  <!-- single-page-banner start -->
    <section class="single-page-banner" style="background-image:url(<?=get_field('banner_image',$post_id)?>">
      <div class="single-banner-content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- <div class="single-banner-content">
                <h2 class="single-banner-title"><?=get_field('banner_text',$post_id)?></h2>
                <ul class="page-list">
                    <li><a href="<?= site_url();?>">Home</a></li>
                    <li><?=get_field('banner_text',$post_id)?></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- single-page-banner end  -->


  <!-- success-story-section start -->
  <section class="success-story-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 section-left-content">
          <h2 class="section-left-sub-head mb-5 text-center"><?=get_field('content_heading',$post_id)?></h2>
          <!-- <h2 class="section-left-head">Us</h2> -->
          <div class="about_pagedata">
		  <?=get_field('content',$post_id)?>            
          </div>
        </div><!-- learning-left end -->
        <!-- <div class="col-lg-6">
          <div class="review-thumb">
            <img src="<?=get_field('content_image',$post_id)?>" alt="review-image">
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- success-story-section end -->

<?php 
get_footer();
?>
