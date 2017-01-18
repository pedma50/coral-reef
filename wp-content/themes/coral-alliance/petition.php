<?php 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $postcode = $_POST['postcode'];

    $headers = "From: Coral Alliance";
    $email_subject = "New Petition Sign Up";
    $email_from = "Coral Alliance";
    $email_body .= "You have a new signature for the petition.\n";
    $email_body .= "Name: $name \n";
    $email_body .= "Email: $email \n";
    $email_body .= "Postcode: $postcode \n";

    $to = "martinez11@mail.usf.edu";

    mail($to, $headers, $email_subject, $email_body, $email_from);
    header("Location: /coral-reef");

    
?>
