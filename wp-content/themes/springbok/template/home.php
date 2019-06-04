<?php

/**
 * Template Name: Homepage 
 */

get_header();
global $error;
$error = new WP_Error();
$post_id= get_the_id();
?>

<section class="banner-section" style="background-image:url(<?=get_field('banner_image',$post_id)?>">
  <div class="owl-carousel banner-slider">
    <div class="banner-slider-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <div class="banner-content">
               <?=get_field('banner_text',$post_id)?>
                <!-- <a href="#" class="cmn-button">get started now</a> -->
              </div>
          </div>
        </div>
      </div>
    </div><!-- banner-slider-item end -->
    <!-- <div class="banner-slider-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <div class="banner-content">
                <h1 class="banner-content-head">Better education for A better world </h1>
                <p>There are many variations of passages of Lorem Ipsum available but the majority have that an suffered alteration in some form by injected humour or randomised words which don't look at even slightly believable dummy text.</p>
                <a href="#" class="cmn-button">get started now</a>
              </div>
          </div>
        </div>
      </div>
    </div> --><!-- banner-slider-item end -->
    <!-- <div class="banner-slider-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <div class="banner-content">
                <h1 class="banner-content-head">Better education for A better world </h1>
                <p>There are many variations of passages of Lorem Ipsum available but the majority have that an suffered alteration in some form by injected humour or randomised words which don't look at even slightly believable dummy text.</p>
                <a href="#" class="cmn-button">get started now</a>
              </div>
          </div>
        </div>
      </div>
    </div> --><!-- banner-slider-item end -->
  </div>
</section>
<!-- banner-section end  -->

<?php 
get_footer();
?>
