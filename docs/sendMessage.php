<?php
error_reporting(E_ALL)
ini_set('Error Reporting', E_ALL)

$name = $_POST['contactForm-name'];
$mailFrom = $_POST['contactForm-email'];
$message = $_POST['contactForm-message'];
$subject = 'New Website Contact Submission';

$mailTo = 'me@jackfirth.com';
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name. ".\n\n".$message";

if ($_POST['submit']) {
    if (mail ($mailTo, $subject, $txt, $headers)) {
        echo '<p>Your message was sent! </p>';
    } else {
        echo '<p>Something went wrong, please try again';
    }  
}  
?>