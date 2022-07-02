<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');
//Create an instance; passing `true` enables exceptions
if(isset($_POST['submit']))
{
  $mail = new PHPMailer(true);
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV["id"];                     //SMTP username
    $mail->Password   = $_ENV["pass"];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('service.webnetic@gmail.com');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = 'Name:'.$name.'<br>Email:'.$email.'<br>phone:'.$phone.'<br><br><b>'.$message.'</b>';
    $mail->send();
    echo '<span style="color:green;">Send!</span>';
  } 
  catch (Exception $e) {
    echo '<span style="color: red;">Message could not be sent. Mailer Error: {$mail->ErrorInfo}</span>';
  }
}
?>