<?php

/**
 * Template Name: Privacy
 */

get_header();
$post_id=get_the_id();
?>

	<!-- =============== main content starts here =============== -->


	<section class="single-page-banner">

    <div class="single-banner-content-area">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="single-banner-content" style="background-image:url(<?=get_field('banner_image',$post_id)?>">

              <h2 class="single-banner-title"><?=get_field('banner_text',$post_id)?></h2>

              <ul class="page-list">

                  <li><a href="<?= site_url(); ?>">Home</a></li>

                  <li>Privacy Policy</li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- single-page-banner end  -->



  <!-- privacy-section strat -->

  <div class="privacy_section section-padding">

    <div class="container">
<?=get_field('page_content',$post_id)?>
        

        

    </div>

  </div>
	<!-- // =============== main content ends here =============== -->


<?php 
get_footer();
?>
