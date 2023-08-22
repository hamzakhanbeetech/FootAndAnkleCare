<?php 

    //get data from form  
    $name = $_POST['first_name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "cypressfootandanklecenter@gmail.com";
    $subject = "Cypress Foot And Ankle";

    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    
    header('Location: appointment-success-msg.html');
    
?>
