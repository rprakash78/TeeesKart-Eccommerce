<?php
require_once('connection.php');

$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($email) || empty($pass)) {
    header("location:sign_in.php?Empty= Plz Enter the fields");
    exit;
}

$stmt = mysqli_prepare($conn, "SELECT Email FROM registration WHERE Email = ? AND Password = ?");
mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_fetch_assoc($result)) {
    session_start();
    $_SESSION['username'] = $email;
    header("location:index.php?sucess= Login Sucessfull..!!");
} else {
    header("location:sign_in.php?Invalid= Plz Enter Correct UserName And Password");
}
?>
