<?php 
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phone = $_POST['phone'];

	$email_from = "$visitor_email"; 
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Phone: $phone.\n";


	$to = "info@vakantieparels.nl";
	
	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);					

	

	if (mail($to,$email_subject,$email_body,$headers)) { 
		header("Refresh: 5; url=index.html");
		echo 'Je verzoek is aankomen, bedankt. We nemen zo snel mogelijk contact met je op.';
       
    } else {
    	header("Refresh: 5; url=index.html");
		echo "Message Sending Failed, try again";
    }



?>

