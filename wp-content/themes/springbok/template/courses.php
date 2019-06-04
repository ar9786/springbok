<?php

/**
 * Template Name: Courses 
 */
$post_id=get_the_id();
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1
);
$query = new WP_Query($args);
if ( !is_user_logged_in() ) {	
	wp_redirect(site_url());
}
get_header();
	
?>

	<!-- =============== main content starts here =============== -->
<section class="single-page-banner" style="background-image:url(<?=get_field('banner_image',$post_id);?>)">
    <div class="single-banner-content-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- <div class="single-banner-content">
              <h2 class="single-banner-title">Courses</h2>
              <ul class="page-list">
                  <li><a href="<?php echo site_url();?>">Home</a></li>
                  <li><?=get_field('banner_text',$post_id)?></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- single-page-banner end  -->

  <!-- courses-section start -->
  <section class="courses-section section-padding section-bg">
    <div class="container">
      <h2 class="section-left-sub-head mb-5 text-center">Courses Offered</h2>
      <div class="section-wrapper mt-0">
        <div class="row">
		<?php 
		if ( $query->have_posts() ) : 
			while ( $query->have_posts() ) : $query->the_post();
		?>
          <div class="col-lg-4 col-md-6 course-single">
            <div class="course-single-item">
              <div class="course-single-thumb">
			  <?php if(!empty(get_field('course_image',get_the_ID()))){ ?>
                  <img src="<?=get_field('course_image',get_the_ID());?>" alt="course-image">
			  <?php }?>
              </div>
              <div class="course-single-content">
                <h4 class="course-title mb-3"><?=get_field('course_name',get_the_ID());?></h4>
                <div class="course_keys">
                  <?=get_field('course_content',get_the_ID());?>
                </div>
              </div>
            </div><!-- course-single-item end -->
          </div><!-- course-single end -->
		  <?php endwhile; ?>
		  <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>