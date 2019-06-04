<?php

/**
 * Template Name: Services 
 */

get_header();
$post_id=get_the_id();
?>

<!-- =============== main content starts here =============== -->


<!-- banner starts here -->
<div class="page_banner_caption">
	<div class="page_banner_wrap">
		<img src="<?= get_field('banner_imsge',$post_id)?>" alt="">
	</div>
	<h1 class="caption_heading ttu color_white"><span class="sub_heading1"><?= the_field('banner_title',$post_id)?></span></h1>
	<a href="#services_section_secure" class="banner_scroll hashscroll"><img src="<?= get_bloginfo('template_directory')?>/images/scroll_down.png" alt=""></a>
</div>
<!-- // banner ends here -->

<!-- secure deliveries sections starts here -->

	<?php
 
     $args = array(
  	                'post_type' => 'services_post',
 	    							'posts_per_page' => -1,
 	    							'orderby' => 'post_date',
 	    							'order' => 'ASC' 
                );
   	$postDatas = new WP_Query($args); 
   ?>

<div class="section_part sucure_deliver" id="services_section_secure">
	<div class="container">
		<div class="row row_gutter40">
		 <?php
		  $i=1;
			 while ( $postDatas->have_posts() ) : $postDatas->the_post(); 
				   $postId = get_the_id();

			if($i%2===0){
				 
				?>

	
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data insure_data color_white">
                             <?php echo get_field('sub_content',$postId); ?>
						</div>
						<button type="button" onclick="window.location='javascript:void(0);'" class="btn layered_btn layer_base">see how we do it</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><?php echo get_field('title',$postId); ?></h1>
				</div>
			</div> 
		
		<?php } else {?>

                 <div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><?php echo get_field('title',$postId); ?></h1>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data">
							<?php echo get_field('sub_content',$postId); ?>
						</div>
						<button type="button" onclick="window.location='javascript:void(0);'" class="btn layered_btn layer_base">Check It Out</button>
					</div>
				</div>
			</div>

        <?php }?>
		<?php 
	      $i++;
	   endwhile; ?>
		</div>
	</div>
</div>
<!-- // secure deliveries sections ends here -->


<!-- world class logistics starts here -->
<!--
<div class="section_part sucure_deliver realtime_tracking insure_data_section sercice_wcl">
	<div class="container">
		<div class="row row_gutter40">
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data insure_data color_white">
							An important part of our security is supplying each vehicle with state of the art logistics to deliver your product safely.  Not only is your package constantly tracked by our dispatchers, but our vans are smart-routed through Cannabis friendly areas and around red zones.  The client is updated regularly and notified of delivery time on their personal device through our user-friendly app.   
						</div>
						<button type="button" onclick="window.location='javascript:void(0);'" class="btn layered_btn layer_base">see how we do it</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><span>worls <br>class <br>logistics</span></h1>
				</div>
			</div>
		</div>
	</div>
</div>

 // world class logistics ends here 
-->

<!-- sreal time tracking starts here -->
<!--

<div class="section_part sucure_deliver realtime_tracking">
	<div class="container">
		<div class="row row_gutter40">
			<div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><span>Real Time <br>Tracking</span></h1>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data">
							Part of our security installation is GPS tracking. To protect our clients from any internal or external forces, our real time tracking provides up to the minute delivery information without the exact location. This will protect the delivery from any potential security breaches that may occur by showing when the driver will arrive but not from where. 
						</div>
						<button type="button" onclick="window.location='javascript:void(0);'" class="btn layered_btn layer_base">Learn More</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
// sreal time tracking ends here -->

<!-- personal experience starts here  -->
<!--
<div class="section_part sucure_deliver realtime_tracking insure_data_section sercice_wcl services_persnl_exp">
	<div class="container">
		<div class="row row_gutter40">
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data insure_data color_white">
							Secure Hauling employs ex-military personnel who are trained in combat and security and undergo full Live-scan checks.  This personnel format provides peace of mind for our clients, so they know that their assets are safe and it allows Secure Hauling to give back to our veterans who have kept our nation safe by offering them employment.   
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><span>Experienced <br>Personnel</span></h1>
				</div>
			</div>
		</div>
	</div>
</div>// personal experience ends here  -->



<!-- sreal time tracking starts here -->
<!--
<div class="section_part sucure_deliver realtime_tracking insure_data_section">
	<div class="container">
		<div class="row row_gutter40">
			<div class="col-sm-6">
				<div class="col-selector">
					<h1 class="heading_main"><span>Professional <br>and Insured <br>Service</span></h1>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-selector">
					<div class="secure_deliver_data_wrap">
						<div class="secure_deliver_data insure_data">
							Secure Hauling insures our client's cargo for up to $500,000<span>USD</span> per load and we carry up to $2<span>M</span> in liability insurance.  We are registered with the DOT and the state of California and operate compliantly under a state issued distribution license.   
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 // sreal time tracking ends here -->


<!-- trasportation section starts here -->
<div class="transportation_quote">
	<div class="container">
		<div class="tranportation_sec">
			<h2>Need transportation ?</h2>
			<button type="button" data-toggle="modal" data-target="#request_Quote" class="btn layered_btn layer_base">Request Quote</button>
		</div>
	</div>
</div>
<!-- // trasportation section ends here -->


<!-- // =============== main content ends here =============== -->


<?php get_footer();?>