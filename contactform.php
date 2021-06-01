<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$companyName = $_POST['company'];
		
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		// Check if company name has been entered
		if(!$_POST['company']) {
			$errCompanyName = 'Please enter a company name';
		}

		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
 
		$headers .= 'From: <support@orionmetis.co.in>' . "\r\n";
		$headers .= 'Cc: support@orionmetis.co.in' . "\r\n";
		$to = 'orionmetis@gmail.com'; 
		$subject = "Website query submission from Mr./Ms. ".$name." ";
		$body = "Dear support team,\n This is ".$name." writing an email on behalf of my Company: "$companyName".\n\nPlease find my query below:\n$message.\n\nPlease write back to me to my email address : $email\n\nThanks,\n$name";

		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errCompanyName ) {
			if (mail ($to, $subject, $body, $headers)) {
				$result='<div class="alert alert-success">Thank You for writing to us!Our support team will contact you shortly</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
			}
		}
	}
?>
