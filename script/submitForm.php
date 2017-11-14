<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$email_from = "ASimmonsEE@gmail.com";
	$email_subject = "New Form Submission";
	$email_body = "You have received a new message from $name. \n".
					"Here is the message: \n $message".
					
	$to = "ASimmonsEE@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to, $email_subject, $email_body, $headers);
?>

