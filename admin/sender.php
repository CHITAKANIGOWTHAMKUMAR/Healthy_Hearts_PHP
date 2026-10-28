<?php
session_start(); 
include('../conn_db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){
    $mail =new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->Host ='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='poorna7569@gmail.com';
    $mail->Password='cwmazbhsgxtbwxvw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('poorna7569@gmail.com');
    $mail->addReplyTo("poorna7569@gmail.com");
    $query = "SELECT * FROM user;";
    $result = $mysqli -> query($query);
    if($result -> num_rows>0){

    while($x=mysqli_fetch_assoc($result))
    {
        $mail->addAddress($x['c_email']);
        $mail->isHTML(true);
        $mail->Subject=$_POST["subject"];
        $mail->Body=$_POST['body'];
    }
    
    $mail->send();


    }






  echo"<script>
  alert('sent successfully')
  document.location.href='compose.php'</script>";
}


?>
