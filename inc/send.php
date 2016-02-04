<?php 
	if (isset($_POST['submit'])) {

		if(empty($_POST['email'])) { 
			echo("Please, fill your email.");
		}
		if(empty($_POST['message'])) {
			echo("Please, fill message filed");
		}

		$to = 'tomas.vohradnik@gmail.com';
		$subject = 'New Message from Contact Form cv.tomasvohradnik.com';
		$message = $_POST['message'];
		$email = $_POST['email'];
		$headers = 'From: noreply@cv.tomasvohradnik.com';
		
		mail($to, $subject, $message, $email, $headers);
		header( 'Location: http://www.cv.tomasvohradnik.com/thankyou.php' );
		exit;
	}