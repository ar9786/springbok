<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package securehauling
 */
	if(isset($_POST['submit_login'])){
	if(!isset($_POST["user_name"]) || $_POST["user_name"] == ''){
		$failed = 1;
		$errors['error'] = "Username is Required.";
	}
	if(!isset($_POST["password"]) || $_POST["password"] == ''){
		$failed = 1;
		$errors['error'] = "Password is Required.";
	}
	$info = array();
	$info['user_login'] = $_POST['user_name'];
	$info['user_password'] = $_POST['password'];
	$info['remember'] = true;
	$user_signon = wp_signon( $info, false );
	if ( is_wp_error($user_signon) ){
		$errors['error'] = "Username does not exist.";
	?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css"/>
	<script src="<?= get_bloginfo('template_directory')?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>
		<script>
		$(function () {
		toastr.warning('Wrong username or password !');
		});
		</script>
	<?php
	}else{
		/*echo '<pre>';
		print_r($user_signon->data->user_login);
		exit;*/
		if($_POST['redirect_url'] == 'redirect'){
		wp_redirect(site_url().'/courses-offered');
		}else{
			global $wp;
			wp_redirect( $wp->request );
		//wp_redirect(site_url());	
		}
	}
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Springbok</title>
	<?php wp_head(); ?>
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= get_bloginfo('template_directory')?>/assets/images/favicon.ico" type="image/x-icon">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/fontawesome.min.css">
	<!-- flaticon -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/flaticon.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/bootstrap.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/animate.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/owl.carousel.min.css">
	<!-- main style css -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory')?>/assets/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css"/>
	<script type="text/javascript">
		var BASE_URL = "<?= site_url()?>";
	</script>
	<style>
	    html{margin-top: 0px !important;}
	</style>
	  <!-- jquery library js -->
  <script src="<?= get_bloginfo('template_directory')?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="preloader">
        <div id="loader"></div>
</div>
<?php //esc_html_e( 'Menu', 'securehauling' ); ?></button>
  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-top">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-7">
            <!-- <ul class="header-company-contact">
              <li><i class="fa fa-phone"></i>+91-9176015102</li>
              <li><i class="fa fa-envelope"></i> info@springbok.tech</li>
            </ul> -->
          </div>
          <div class="col-lg-5 col-md-5">
		  <?php if ( !is_user_logged_in() ) { ?>
            <ul class="header-user-login-regis">
              <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login_popup" ><i class="fa fa-user"></i>Log in</a></li>
              <li><a href="<?php echo site_url();?>/register"><i class="fa fa-lock"></i>Register</a></li>
            </ul>
		  <?php } else {
			  global $current_user;
		  ?>
            <ul class="header-user-login-regis">
              <li><a href="javascript:void(0);"><i class="fa fa-user"></i>Welcome, <span class="text-capitalize text-white"><?= $current_user->display_name; ?></span></a></li>
              <li><a href="<?php echo wp_logout_url( home_url()); ?>"><i class="fa fa-lock"></i>Logout</a></li>
            </ul>
		  <?php } ?>
          </div>
        </div>
      </div>
    </div><!-- header-top end -->
    <div class="header-bottom">
      <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="site-logo site-title" href="<?php echo site_url() ?>"><img src="<?= get_bloginfo('template_directory')?>/assets/images/logo.png" alt="site-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php /* <ul class="navbar-nav main-menu ml-auto">
                <li><a href="<?php echo site_url();?>">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Courses offered</a></li>
                <!-- <li class="menu_has_children"><a href="#">blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog-page.html">Blog page</a></li>
                    <li><a href="blog-details.html">blog single</a></li>
                  </ul>
                </li> -->
                <li><a href="contact-page.php">Contact us</a></li>                    
              </ul>*/ ?>
			  <?php			  
			  wp_nav_menu(array('menu'=>'header-menu','menu_class' => 'navbar-nav main-menu')); 
				?>
              <div class="header-search-area d-none">
                <div class="header-search-toggle"><i class="fa fa-search"></i></div>
                <div class="header-serach-block closed">
                  <form class="header-search-form d-flex">
                    <input type="search" name="header-search" id="header-search" placeholder="Search your item">
                    <button class="header-search-btn" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
<!--  header-section end  -->