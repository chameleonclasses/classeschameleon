<?php
$to = 'lalteshsharma1997@gmail.com';
$name = $_POST["name"];
$phone = $_POST["phone"];
$email= $_POST["email"];
$qualification= $_POST["qualification"];
$specialization= $_POST["specialization"];
$course= $_POST["course"];
$class= $_POST["class"];
$experience= $_POST["experience"];



$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
    <tr>
        <td>'.$name.'  '.$subject.'</td>
    </tr>
    <tr><td>Email: '.$email.'</td></tr>
    <tr><td>Phone: '.$phone.'</td></tr>
    <tr><td>Qualifications: '.$qualification.'</td></tr>
    <tr><td>Area of specialization: '.$specialization.'</td></tr>
    <tr><td>Subject: '.$course.'</td></tr>
    <tr><td>Class: '.$class.'</td></tr>
    <tr><td>Experience: '.$experience.'</td></tr>
    
    
    
</table>';



    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }







?>