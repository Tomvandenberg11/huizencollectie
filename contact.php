<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Gebruiker'; 
    $to = 'tomvandenberg11@hotmail.com, jhendriks325@gmail.com'; 
    $subject = 'Email van websitebezoeker';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
		header("Location: verzonden.html");
    } else { 
        echo '<p>Er is iets fout gegaan, probeer het opnieuw!</p>'; 
    }
}
?>