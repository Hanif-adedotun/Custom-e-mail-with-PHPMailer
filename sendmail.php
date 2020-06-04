<?php

//import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/vendor/autoload.php"; 

$mail = new PHPMailer(true);

$recipientArr = array('hanif.adedotun@gmail.com', 'raphew@gmail.com', 'Hsaudu45@gmail.com', 'hanifadedotun2k19@gmail.com');
$myUsername = 'voltex.designs@outlook.com';
$myPassword = 'hanif_voltex';
$bodyHtml = '<body>
<style>
    body{
    width: 100%;
    text-align: center;
    font-family: Montserrat, Cambria, Cochin, Georgia, Times, serif;
}
#logo{height: 20%; width: 50%;}
h2{text-align: center;}
</style>
<h2> Voltex Monthly News letter</h2>
<span><img id="logo" src="https://drive.google.com/uc?id=1WDWQ6nG7cz2yK8cN0LfkIbADZvpQctvc"  alt="voltex logo"/></span>
<p>Picture of newsletter flyer i want to add.</p>
<p>Then the body will cointain news articles and its links</p>
</body>';


    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.live.com';  //smtp.gmail.com
    $mail->SMTPAuth = true;
    $mail->Username = $myUsername;  //Update to voltexEmailSubscribe@gmail.com
    $mail->Password = $myPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';
    
    //Recepient
    $mail->setFrom($myUsername, 'Voltex Monthly News Letter');
    $mail->addAddress('hanifadedotun2k19@gmail.com');

    /*if (!empty($recipientArr)) {                          //have mutiple recepients
        foreach ($recipientArr AS $eachAddress) {
            $mail->addAddress($eachAddress);
        } }
    
        $mail->addReplyTo($myUsername);*/

    
    //Content of Mail
    $mail->isHTML(true);
    $mail->Subject = 'Voltex News Letter Test2';
    $mail->Body = $bodyHtml;

    //send mail  
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

?>