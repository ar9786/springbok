$('document').ready(function(){
	$('#student_submit').submit(function(){
		var flag = 1;
		var student_name = $("#student_name").val();
		var student_branch = $("#student_branch").val();
		var student_semester = $("#student_semester").val();
		var student_college = $("#student_college").val();
		var student_city = $("#student_city").val();
		var student_state = $("#student_state").val();
		var student_email = $("#student_email").val();
		var student_contact = $("#student_contact").val();
		var student_module = $("#student_module").val();
		var student_username = $("#student_username").val();
		var student_password = $("#student_password").val();
		var student__confirm_password = $("#student__confirm_password").val();
		
		var pattern = /^\d{10}$/;
		if (pattern.test(student_contact)) {
			$('#contact_error').html("");
		}else{
			$('#contact_error').html("10 Digit Only");
			flag = 0;
		}
		if(student_name == ''){
			flag = 0;
			$('#student_names').html('Required*');
		}else{
			$('#student_names').html('');
		}
		if(student_branch == ''){
			flag = 0;
			$('#student_branchs').html('Required*');
		}else{
			$('#student_branchs').html('');
		}
		if(student_semester == ''){
			flag = 0;
			$('#student_semesters').html('Required*');
		}else{
			$('#student_semesters').html('');
		}
		if(student_college == ''){
			flag = 0;
			$('#student_colleges').html('Required*');
		}else{
			$('#student_colleges').html('');
		}
		if(student_city == ''){
			flag = 0;
			$('#student_citys').html('Required*');
		}else{
			$('#student_citys').html('');
		}
		if(student_state == ''){
			flag = 0;
			$('#student_states').html('Required*');
		}else{
			$('#student_states').html('');
		}
		if(student_email == ''){
			flag = 0;
			$('#student_emails').html('Required*');
		}else{
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(student_email)){
				$('#student_emails').html('');
			}else{
				flag = 0;
				$('#student_emails').html('Please enter a valid Email ID.');
			}
		}
		if(student_contact == ''){
			flag = 0;
			$('#student_contacts').html('Required*');
		}else{
			$('#student_contacts').html('');
		}
		if(student_username == ''){
			flag = 0;
			$('#student_usernames').html('Required*');
		}else{
			$('#student_usernames').html('');
		}
		if(student_password == ''){
			flag = 0;
			$('#password_error').html('Required*');
		}else{
			$('#password_error').html('');
		}
		if(student__confirm_password == ''){
			flag = 0;
			$('#student__confirm_passwords').html('Required*');
		}else{
			$('#student__confirm_passwords').html('');
		}
		if(student__confirm_password != student_password){
			flag = 0;
			$('#password_error').html("Password not validate");
		}else{
			$('#password_error').html("");
		}
		if(flag == 0)
			return false;
		else
			return true;
	});	
	
	
	
	// Contact Us
	$('#contct').submit(function(){
		var contact_name = $('#contact_name').val();
		var contact_website = $('#contact_website').val();
		var contact_email = $('#contact_email').val();
		var contact_mesg = $('#contact_message').val();
		if(contact_name == ''){
			flag = 0;
			$('#contact_names').html("Required*");
		}else{
			$('#contact_names').html("");
		}
		if(contact_website == ''){
			flag = 0;
			$('#contact_websites').html("Required*");
		}else{
			$('#contact_websites').html("");
		}
		if(contact_email == ''){
			flag = 0;
			$('#contact_emails').html("Required*");
		}else{
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(contact_email)){
				$('#contact_emails').html("");
			}else{
				flag = 0;
				$('#contact_emails').html('Please enter a valid Email ID.');
			}
		}
		if(contact_mesg == ''){
			flag = 0;
			$('#contact_messages').html("Required*");
		}else{
			$('#contact_messages').html("");
		}
		if(flag == 0){
			return false;
		}
	});
});