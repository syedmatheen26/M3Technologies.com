<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'Reactia Infotech';
    $email_subject ="from Reactia Infotech Contact: $subject";
    $email_body = "Name: $name.\n".
                  "Email:$email.\n".
                  "Message: $message.\n";
    
    $to ="punit461bhardwaj@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

?>
