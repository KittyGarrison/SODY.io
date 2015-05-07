<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'mssoender@gmail.com';     
$email_subject = "Sody kontakt form:  $name";
$email_body =  "Du har modtaget en ny besked fra en potentiel kunde. Her er detaljerne: \n."
               "Navn: $name\nEmail: $email_address\nTlf.: $phone\nInteresseret i:\n$message";
$headers = "From: $email";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>