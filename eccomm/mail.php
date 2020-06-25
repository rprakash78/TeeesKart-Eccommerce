<?php
$email=$_POST["email"];
$conn=mysqli_connect('localhost','root','','ecommerce');
$query="select * from registration where Email='{$email}'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "crescenttech45@gmail.com";
  $mail->Password = "Admin@123";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "crescenttech45@gmail.com";
  $mail->FromName = "Cresccent Tech";
  
  $mail->addAddress($row["Email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "Password Recovery";
  $mail->Body = "<b>This is your password:</b> ".$row["Password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "<b>Mailer Error:</b>&nbsp;" . $mail->ErrorInfo;
   header("refresh:1,url=forgot.php");
  }
  else
  {
   echo "<br><h1>Message has been sent successfully</h1>";
   header("refresh:2,url=Sign_in.php");
  }