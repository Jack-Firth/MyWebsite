<?php


    $name = $_POST['contact-name'];
    $subject = "New Website Contact Submission";
    $mailFrom = $_POST['contact-email'];
    $message = $_POST['contact-message'];
    
    $mailTo = "me@jackfirth.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
  

?>