<?php
    if(isset($_Post['submit'])){ 

    
    $name = $_POST["name"];
    $qualifications = $_POST["qualifications "];
    $specialization = $_POST["specialization"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $areapin = $_POST["areapin"];
    $course = $_POST["course"];
    $class = $_POST["class"];
    $experience = $_POST["experience"];

    $to = 'lalteshsharma1997@gmail.com';
    $subject='Form Submission';
    $message = "Name: ".$name. "\n"."Phone: ".$qualifications."\n". "Wrote the following: "."\n\n".$experience;
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    
    

    if (@mail($to, $subject, $message,  $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }
}

?>
