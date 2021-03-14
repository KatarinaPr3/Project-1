<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    $mailFrom = $_POST['mail'];
    $mess = $_POST['message'];
    
    $mailTo = "youremail@email.com";
    $headers = "From: ".$mailFrom;
    
    $message = "Primili ste e-mail od ".$name.".\n\n".$mess;
    

    mail($mailTo, $headers,$message);
    header("Location:https://google.com");
}


?>