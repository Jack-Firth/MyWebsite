<?php
if (isset($_POST['submit']))  {
    $name = $_POST['contactForm-name'];
    $subject = "New Website Contact Submission";
    $mailFrom = $_POST['contactForm-email'];
    $message = $_POST['contactForm-message'];
    
    $mailTo = "me@jackfirth.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
}  
?>