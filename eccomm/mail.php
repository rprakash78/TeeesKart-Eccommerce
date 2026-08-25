<?php
$email = isset($_POST["email"]) ? $_POST["email"] : '';
if ($email === '') {
    echo "<b>Mailer Error:</b>&nbsp;Email is required";
    header("refresh:1,url=forgot.php");
    exit;
}

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (!$conn) {
    echo "<b>Mailer Error:</b>&nbsp;Database unavailable";
    exit;
}

$stmt = mysqli_prepare($conn, "SELECT Email FROM registration WHERE Email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = $result ? mysqli_fetch_array($result, MYSQLI_ASSOC) : null;
if (!$row) {
    echo "<br><h1>If this email is registered, a message will be sent.</h1>";
    header("refresh:2,url=Sign_in.php");
    exit;
}

require 'PHPMailer-master/PHPMailerAutoload.php';

$smtpUser = getenv('SMTP_USERNAME');
$smtpPass = getenv('SMTP_PASSWORD');
if (!$smtpUser || !$smtpPass) {
    echo "<b>Mailer Error:</b>&nbsp;SMTP credentials are not configured";
    header("refresh:1,url=forgot.php");
    exit;
}

$mail = new PHPMailer();
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = TRUE;
$mail->Username = $smtpUser;
$mail->Password = $smtpPass;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->From = $smtpUser;
$mail->FromName = "Cresccent Tech";
$mail->addAddress($row["Email"]);
$mail->isHTML(true);
$mail->Subject = "Password Recovery";
$mail->Body = "A password reset was requested for this account. If you did not request this, you can ignore this email.";
$mail->AltBody = "A password reset was requested for this account.";
if (!$mail->send()) {
    echo "<b>Mailer Error:</b>&nbsp;" . $mail->ErrorInfo;
    header("refresh:1,url=forgot.php");
} else {
    echo "<br><h1>Message has been sent successfully</h1>";
    header("refresh:2,url=Sign_in.php");
}
