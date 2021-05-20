<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'orionmetis@gmail.com'; 
		
		// WARNING: Be sure to change this. This is the address that the email will be sent to
		$to = 'krishnav4124@gmail.com'; 
		
		$subject = "A query submitted by Mr/Ms ".$name." from OrionMetis website ";
		
		$body = "Hi, \n This is $name and I am interested in the products shown, I have some query and thus writing an email \name My query:$message \n\n Please write back to me to my email address : $email \nThanks,\n $name";
		
 
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
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
			}
		}
	}
?>
