<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package securehauling
 */

?>
<!-- create-accont-section start -->
<section class="create-accont-section d-none">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-8">
        <div class="create-account-part">
          <h5 class="sub-head">Create Your</h5>
          <h4 class="division-head">Free Account Now </h4>
          <form class="create-account-form">
            <input type="text" name="user-name" id="name" placeholder="Your Name *">
            <input type="email" name="user-email" id="email" placeholder="Email *">
            <input type="tel" name="user-num" id="phone" placeholder="Phone *">
            <input type="button" value="get it now">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- create-accont-section end -->



  <!-- fooetr-section start -->
  <footer class="footer-section">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="col-selctor text-center text-sm-left mb-4 mb-md-0 d-block d-sm-flex" style="height: 92px">
              <img src="<?= get_bloginfo('template_directory')?>/assets/images/footer_logo.png" alt="" class="align-self-center" width="250">
            </div>
          </div>
          <div class="col-md-8 col-12">
            <div class="widget course-links-widget">
              <div class="inlinewrapper clearfix">
                <h5 class="widget-title float-lg-left text-center text-sm-left">Quick Links</h5>
                <div class="footer_quick_links float-lg-right text-center text-sm-left">
                  <?php       
                  wp_nav_menu(array('menu'=>'header-menu','menu_class' => 'courses-link-list')); 
                  ?>
                </div>
              </div>
              
              <!--<ul class="courses-link-list">
                <li><a href="index.php"><i class="fa fa-long-arrow-right"></i> Home</a></li>
                <li><a href="about.php"><i class="fa fa-long-arrow-right"></i> About</a></li>
                <li><a href="courses-page.php"><i class="fa fa-long-arrow-right"></i> Courses offered</a></li>
                <li><a href="contact-page.php"><i class="fa fa-long-arrow-right"></i> Contact us</a></li>
              </ul>-->
            </div>

            <div class="widget latest-news-widget">
              <div class="inlinewrapper text-center text-sm-left">
                <!-- <h5 class="widget-title">Contact Us</h5> -->
                <ul class="small-post-list list-inline">
                  <li class="list-inline-item">
                    <div class="small-post-item clearfix">
                      <h5 class="text-light float-left"><i class="fa fa-phone"></i>&emsp;</h5>
                      <p class="float-right"><a href="tel:+91-9176015102" class="text-light">+91-9176015102</a></p>
                    </div>
                  </li><!-- small-post-item end -->
                  <li class="list-inline-item ml-lg-5">
                    <div class="small-post-item clearfix ml-lg-5">
                      <h5 class="text-light float-left"><i class="fa fa-envelope"></i>&emsp;</h5>
                      <p class="float-right"><a href="mailto:sales@springbok.tech" class="text-light">info@springbok.tech</a></p>
                    </div>
                  </li><!-- small-post-item end -->
                </ul>
              </div>
            </div>
          </div><!-- widget end -->
        </div>
      </div> 
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-6 text-center text-sm-left">
            <span class="copy-right-text">© 2019 <a href="#">Springbok</a> All Rights Reserved.</span>
          </div>
          <div class="col-12 col-sm-4 col-md-6">
            <p class="text-center text-sm-right mt-3 mt-sm-0 text-light"><a href="<?php echo site_url(); ?>/privacy-policy" class="text-white" style="font-size:15px;font-weight:400;">Privacy Policy</a>
			| powered by 
			<a href="https://mobilecoderz.com/" title="MobileCoderz" target="_blank" style="color:#ffffff!important; font-weight:400; font-size:15px; text-decoration:underline;"> MobileCoderz</a></p>
          </div>
        </div>
      </div>
    </div><!-- footer-bottom end -->
  </footer>
  <!-- fooetr-section end -->

  <!-- scroll-to-top start -->
  <div class="scroll-to-top d-none">
    <span class="scroll-icon">
      <i class="fa fa-rocket" aria-hidden="true"></i>
    </span>
  </div>
   <!-- Login Popup Modal--->
  
  <div class="modal fade" id="login_popup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login To Know More</h4>
        </div>
        <div class="modal-body">

  <!-- success-story-section start -->
  <section class="success-story-section loginPage">
    <div class="container">
      <form class="loginform pt-5 pb-5 login_single" action="" method="POST">
        <div class="form-group">
          <label for="">Enter Username :</label>
          <input type="text" class="form-control" required="" name="user_name">
        </div>
        <div class="form-group">
          <label for="">Enter Password:</label>
          <input type="password" class="form-control" required="" name="password">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="col-selector">
			<input type="hidden" class="form-control"  name="redirect_url" id="redirect_url">
              <button type="submit" class="btn btn-warning" name="submit_login">Login</button>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  <!--- End ---->
  
  
  <!-- scroll-to-top end -->
<?php wp_footer(); ?>

  <!-- bootstrap js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
  <!-- owl carousel js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/owl.carousel.min.js"></script>
  <!-- lightcase js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/lightcase.js"></script>
  <!-- jquery waypoints js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/jquery.waypoints.min.js"></script>
  <!-- countup js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/jquery.countup.min.js"></script>
  <!-- main js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/main.js"></script>
  
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/developer.js"></script>
  
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		var ajaxurl = "<?php echo admin_url('admin-ajax.php') ; ?>";
		$("#menu-item-14,.menu-item-14").click(function(){
		var data = {
			'action': 'check_login'
		};
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {
			if(response == 1){
				window.location.href="<?php echo site_url();?>/courses-offered/";
			}else{
				$("#login_popup").val('show');
				$("#login_popup").modal('show');
				$("#redirect_url").val("redirect");
			}
		});
		return false;
	});
	});
	</script> 
	
</body>
</html>