<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test Email</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Testing the Emailer Class</h2>
	<?php 
		require 'Emailer.php'; //access the emailer php file
		$emailTest = new Emailer(); //instantiating a new Emailer object
		
		$emailTest->set_senderEmail("webformtr18@joshbarron.info"); //sets the properties
		$emailTest->set_message("Hello World");
		$emailTest->set_subject("Wanted to say Hello");
		$emailTest->set_recieverEmail("joshthejaunty@gmail.com");
	
		echo $emailTest->get_senderEmail() . "<br>"; //returns the properties
		echo $emailTest->get_recieverEmail() . "<br>";
		echo $emailTest->get_subject() . "<br>";
		echo $emailTest->get_message() . "<br>"; 
			
		if ($emailTest->sendEmail()){
			echo "Email Sent Successfully!";
		}
		else {
			echo "An error occured processing this Email";
		}

	
	
	?>
</body>
</html>