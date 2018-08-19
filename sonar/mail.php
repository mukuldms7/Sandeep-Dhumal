<?php 
/*mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); */

$from="me@sandeepdhumal.com"; 
$ToEmail = 'me@sandeepdhumal.com';
$EmailSubject = 'Site contact form';
$MESSAGE_BODY = "Name: ".$_POST["name"]." \n "; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]." \n"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])." \n"; 

mail($ToEmail,$EmailSubject,$MESSAGE_BODY,"From:".$from);

header('Location: contact.html#Sucessful');
?>