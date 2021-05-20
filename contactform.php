<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$headers .= 'From: <orionmetis@gmail.com>' . "\r\n";
		$headers .= 'Cc: support@orionmetis.co.in' . "\r\n";
		$to = 'orionmetis@gmail.com'; 
		$subject = "Website Submission from Mr./Ms. ".$name." ";
		$body = "Dear OrionMetis support team,\n Please find my query below:\n$message\nPlease write back to me to my email address : $email \n\nThanks,\n $name";
		
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			if (mail ($to, $subject, $body, $headers)) {
				$result='<div class="alert alert-success">Thank You! support team will contact you shortly</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
			}
		}
	}
?>
