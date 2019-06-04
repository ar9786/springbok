<?php
/**
 * Template Name: register 
 */
get_header();
global $error;
$post_id= get_the_id();
$errors = array();

if(isset($_POST["student_submit"])){
	$failed = 0;
	
	$new_user = preg_replace('|[^a-z0-9 _.\-@]|i', '', $_POST['student_username']);
	
	if ($new_user != $_POST['student_username']) {
		$failed = 1;
		$errors["error"] = "Username contains illegal characters.";
	}
	else if (!isset($_POST['student_email']) || $_POST['student_email'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your email address.";
	}
	else if (email_exists($_POST['student_email'])) {
		$failed = 1;
		$errors["error"] = "User already exists with this email address";
	}
	else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/",trim($_POST['student_email']))) {
		$failed = 1;
		$errors["error"] = "Enter valid email address";
	}
	
	if (!isset($_POST['student_username']) || $_POST['student_username'] == "") {
		$failed = 1;
		$errors["error create username"] = "Please create a username.";
	}
	else if (username_exists($_POST['student_username'])) {
		$failed = 1;
		$errors["error"] = "Username is already taken.";
	}
	
	if (!isset($_POST['student_name']) || $_POST['student_name'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your name.";
	}
	if (!isset($_POST['student_branch']) || $_POST['student_branch'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your branch.";
	}
	if (!isset($_POST['student_semester']) || $_POST['student_semester'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your semester.";
	}
	if (!isset($_POST['student_college']) || $_POST	['student_college'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your college.";
	}
	if (!isset($_POST['student_city']) || $_POST	['student_city'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your city.";
	}
	if (!isset($_POST['student_state']) || $_POST	['student_state'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your state.";
	}
	if (!isset($_POST['student_module']) || $_POST	['student_module'] == "") {
		$failed = 1;
		$errors["error"] = "Please enter your module.";
	}
	
	if(!$failed) {
		$registd_mgd = "Sucessfully Registered";
		$user_id = wp_create_user( $new_user, $_POST['student_password'], $_POST['student_email'] );
		update_user_meta($user_id, 'student_name', $_POST['student_name']);
		update_user_meta($user_id, 'student_branch', $_POST['student_branch']);
		update_user_meta($user_id, 'student_semester', $_POST['student_semester']);
		update_user_meta($user_id, 'student_college', $_POST['student_college']);
		update_user_meta($user_id, 'student_city', $_POST['student_city']);
		update_user_meta($user_id, 'student_state', $_POST['student_state']);
		update_user_meta($user_id, 'student_email', $_POST['student_email']);
		update_user_meta($user_id, 'student_contact', $_POST['student_contact']);
		update_user_meta($user_id, 'student_module', $_POST['student_module']);
		//$jsonwebtoken = jsonwebtoken($user_id);
		
		
		// Mail SMTP configuration
		$from1 = "signup@springbok.com";
		$from2 = "Springbok";
		$addAddress = $_POST['student_email'];
		$subject = "Springbok China username";
		$content = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Springbok</title>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" style="background-color: #0862a9; font: 14px arial,sans-serif; padding: 20px; color: #333333; border: 1px solid #DDDDDD; text-transform: none; text-indent: 0px; letter-spacing: normal; word-spacing: 0px; white-space: normal;font-size-adjust: none; font-stretch: normal;width:100%;max-width: 660px;">
	  <tbody>
	    <tr>
	    	<td>
	    		<table style="border-spacing: 0;"  width="100%">
	    			<tbody>
	    				<tr>
	    				  <td align="center" style="margin: 0px; font-family: arial,sans-serif;" valign="top">
	    				    <table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;padding: 30px;background-color: #ffffff;">
	    				      <tbody>
	    				        <tr>
	    				          <td align="left" style="margin: 0px; padding: 5px 0px 10px; font-size: 14px" valign="top">
	    				            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	    				              <tbody>
	    				                <tr>
	    				                  <td align="left" colspan="12" style="text-align: center;" valign="top"><img alt="bidinline Logo" src="http://spicaworks.com.md-94.webhostbox.net/springbok/wp-content/themes/springbok/assets/images/logo.png"></td>
	    				                </tr>
	    				              </tbody>
	    				            </table>
	    				          </td>
	    				        </tr>
	    				        <tr>
	    				          <td align="left" style="margin: 0px; font-size: 14px" valign="top" width="100%">
	    				            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	    				              <tbody>
	    				                <tr>
	    				                  <td align="left" colspan="12" valign="top" width="100%">
	    				                    <p style="margin: 0;margin-bottom: 20px;">Hi <span><strong> '.$new_user.'</strong></span>,</p>
	    				                  </td>
	    				                </tr>
	    				                <tr>
	    				                  <td align="left" colspan="12" valign="top" width="100%">
	    				                    <p style="margin: 0;margin-bottom: 20px;">You have successfully registered for the Springbok website.</p>
											<p><span>Username:<span><strong> '.$new_user.'</strong></span></p>
											</p>
	    				                  </td>
	    				                </tr>
	    				              </tbody>
	    				            </table>
	    				          </td>
	    				        </tr>
	    				        <tr>
	    				          <td>
	    				            <table style="margin-top: 20px;">
	    				              <tbody>
	    				                <tr>
	    				                  <td>
	    				                    <p style="margin: 0;margin-bottom: 5px;font-size: 14px;">Thank You,</p>
	    				                  </td>
	    				                </tr>
	    				                <tr>
	    				                  <td>
	    				                    <p style="margin: 0;font-size: 14px;">Team Springbok</p>
											
	    				                  </td>
	    				                </tr>
	    				              </tbody>
	    				            </table>
	    				          </td>
	    				        </tr>
	    				      </tbody>
	    				    </table>
	    				  </td>
	    				</tr>
	    			</tbody>
	    		</table>
	    	</td>
	    </tr>
	    <!--<tr>
	      <td>
	        <table style="margin-top: 20px;padding: 30px;width: 100%; background-color: #ffffff;">
	          <tbody>
	          	<tr>
	          		<td>
	          			<table style="width: 100%;text-align: center;">
	          				<tbody>
	          					<tr>
	          						<td style="color: #ffffff;">
	          							<ul style="text-align:center;list-style-type: none;padding-left: 0;margin-bottom: 0;">
	          								<li style="display: inline-block;margin-right: 15px;">
	          									<a href="https://itunes.apple.com/app/week-in-china/id441530574?mt=8"><img src="https://www.weekinchina.com/app/themes/wic/images/bu_app-store.png" alt="Facebook" style="border-radius: 8px;"></a>
	          								</li>
	          								
	          							</ul>
	          						</td>
	          					</tr>
	          					<tr>
	          						<td>
	          							<ul style="text-align:center;list-style-type: none;padding-left: 0;margin-bottom: 0;">
	          								<li style="display: inline-block;margin-right: 15px;">
	          									<a href="javascript:void(0);"><img src="http://hireswiftdeveloper.com/alexamedia/wp-content/themes/alexa/images/mailer/google_play.png" alt=""></a>
	          								</li>
	          								<li style="display: inline-block;">
	          									<a href="javascript:void(0);"><img src="http://hireswiftdeveloper.com/alexamedia/wp-content/themes/alexa/images/mailer/app_store.png" alt=""></a>
	          								</li>
	          							</ul>
	          						</td>
	          					</tr>
	          				</tbody>
	          			</table>
	          		</td>
	          	</tr>
	          </tbody>
	        </table>
	      </td>
	    </tr>-->
	  </tbody>
	</table>
</body>
</html>';
		//include(dirname(__FILE__)."/PHPMailer/sendMail.php");
		//sendMail($mail,$from1,$from2,$addAddress,$subject,$content);
		$to = $_POST['student_email'];
		$from = "Week in China<signup@weekinchina.com>";
		$headers = 'From: '. $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n";
		$headers .= "Content-type: text/html\r\n";
		$sent = wp_mail($to, $subject, $content, $headers);
	}
}
?>

<?php 
	if(isset($registd_mgd)){
	?>
	<script>
	toastr.success('<?php echo $registd_mgd; ?>');
	setTimeout(function(){ $("#login_popup").modal('show'); }, 1000);
	//window.location.href="<?php echo site_url();?>/register/";
	</script>
	<?php } if(isset($errors["error"])){
	?>
	<script>
	toastr.warning('<?php echo $errors["error"]; ?>');
	</script>
	<?php } ?>
  <!-- single-page-banner start -->
    <section class="single-page-banner" style="background-image:url(<?=get_field('banner_image',$post_id)?>">
      <div class="single-banner-content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="single-banner-content">
                <h2 class="single-banner-title"><?//= get_field('banner_text',$post_id)?></h2>
                <ul class="page-list">
                    <?php /* ?><li><a href="<?= site_url();?>">Home</a></li><?php */?>
                    <li><? //= get_field('banner_text',$post_id)?></li>
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
    <form class="loginform pt-5 pb-5" action="" method="POST" id="student_submit">
      <div class="container">
      	<h2 class="section-left-sub-head mb-5 text-center">Student Registration</h2>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Student Name :</label>
              <input type="text" class="form-control"  name="student_name" id="student_name">
			  <div id="student_names" class="errot pt-2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Branch of Engineering :</label>
              <select class="form-control"  name="student_branch" id="student_branch">
                <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                <option value="Electronics & Instrumentation Engineering">Electronics & Instrumentation Engineering</option>
                <option value="Electronics & Computer Engineering">Electronics & Computer Engineering</option>
                <option value="Electronics & Control Engineering">Electronics & Control Engineering</option>
                <option value="Other">Other</option>
              </select>
			  <div id="student_branchs" class="errot pt-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Semester of study :</label>
              <select class="form-control"  name="student_semester" id="student_semester">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
                <option value="8">Semester 8</option>
              </select>
            </div>
			<div id="student_semesters" class="errot pt-2"></div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">College/University :</label>
              <input type="text" class="form-control"  name="student_college" id="student_college">
			  <div id="student_colleges" class="errot"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">City :</label>
              <input type="text" class="form-control"  name="student_city" id="student_city">
			  <div id="student_citys" class="errot pt-2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">State :</label>
              <select class="form-control"  name="student_state" id="student_state">
                <option value="">Select State</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Pondicherry">Pondicherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttaranchal">Uttaranchal</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
              </select>
			  <div id="student_states" class="errot pt-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Email ID:</label>
              <input type="text" class="form-control"  name="student_email" id="student_email">
			  <div id="student_emails" class="errot pt-2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Contact Number :</label>
              <input type="text" class="form-control"  name="student_contact" id="student_contact">
			  <div id="contact_error" class="errot pt-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Interested in Module :</label>
              <select class="form-control"  name="student_module" id="student_module">
                <option value="Foundation">Foundation</option>
                <option value="Bridge">Bridge</option>
                <option value="Elective/Final Course">Elective/Final Course</option>
              </select>
			  <div id="student_modules" class="errot pt-2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Username:</label>
              <input type="text" class="form-control"  name="student_username" id="student_username">
			  <div id="student_usernames" class="errot pt-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Password:</label>
              <input type="password" class="form-control"  name="student_password" id="student_password">
			  <div id="password_error" class="errot pt-2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="form-group">
              <label for="">Confirm Password:</label>
              <input type="password" class="form-control"  name="student__confirm_password" id="student__confirm_password">
			  <div id="student__confirm_passwords" class="errot pt-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="col-selector">
              <button type="submit" class="btn btn-warning" name="student_submit" >Submit</button>
            </div>
          </div>
          <div class="col-6">
            <div class="col-selector">
              <p class="text-right">Already Have An Account? <a href="#" data-target="#login_popup" data-toggle="modal">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- success-story-section end -->
<?php
get_footer();
?>
