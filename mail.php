<?php
    $to = 'lalteshsharma1997@gmail.com';
    $name = $_POST["name"];
    $qualifications = $_POST["qualifications "];
    $specialization = $_POST["specialization"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $areapin = $_POST["areapin"];
    $subject = $_POST["subject"];
    $class = $_POST["class"];
    $experience = $_POST["experience"];


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    

    if (@mail($to, $name, $qualifications, $specialization, $phone, $email, $areapin, $subject, $class, $experience, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }

?>
