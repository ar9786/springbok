<?php

/**
 * Template Name: Contact us 
 */
global $wpdb;
if(isset($_POST['submit_feedback'])){
	$contac_name = $_POST['contact-name'];
	$contact_website = $_POST['contact-name'];
	$contact_email = $_POST['contact-email'];
	$contact_message = $_POST['contact-message'];
	$sql = "insert into wp_contact_form set contact_name = '$contac_name',contact_website = '$contact_website',contact_email = '$contact_email',contact_message='$contact_message'";
	if($wpdb->query($sql)){
		$msg = "Sucessfully Sent";
	}else{
		$msg = "Please try again";
	}
}
$post_id=get_the_id();
get_header();
if(isset($msg)) { ?>  <script>toastr.success('<?php echo $msg; ?>');</script><?php }; ?>
  <!-- single-page-banner start -->
  <section class="single-page-banner" style="background-image:url(<?=get_field('banner_image',$post_id)?>)">
    <div class="single-banner-content-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- <div class="single-banner-content">
              <h2 class="single-banner-title">Contact us</h2>
              <ul class="page-list">
                  <li><a href="<?php echo site_url();?>">Home</a></li>
                  <li>contact page</li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- single-page-banner end  -->

  <!-- contact-section strat -->
  <section class="contact-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6">
          <div class="contact-form-area">
		  <?=get_field('contact_form_text',$post_id)?>
            <form class="contact-from" method="POST" id="contct">
              <div class="frm-group">
                <input type="text" name="contact-name" id="contact_name" placeholder="Full Name">
				<div id="contact_names" class="errot pt-2"></div>
              </div>
              <div class="frm-group">
                <input type="text" name="contact-website" id="contact_website" placeholder="College (If currently enrolled)">
				<div id="contact_websites" class="errot pt-2"></div>
              </div>
              <div class="frm-group">
                <input type="text" name="contact-email" id="contact_email" placeholder="Email" >
				<div id="contact_emails" class="errot pt-2"></div>
              </div>
              <div class="frm-group">
                <textarea name="contact-message" id="contact_message" placeholder="Comments"></textarea>
				<div id="contact_messages" class="errot pt-2"></div>
              </div>
              <div class="frm-group">
                <input type="submit" value="submit now" name="submit_feedback">
              </div>
            </form>
          </div>
        </div>
        <?=get_field('contact_info',$post_id)?>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

<?php get_footer();?>