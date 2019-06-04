<?php 

add_action( 'wp_ajax_nopriv_check_login', 'check_login' );
add_action( 'wp_ajax_check_login', 'check_login' );
function check_login() {
	global $wpdb;
	if ( is_user_logged_in() ) {
		echo 1;
	}else{
		echo 0;
	}
	wp_die();
}