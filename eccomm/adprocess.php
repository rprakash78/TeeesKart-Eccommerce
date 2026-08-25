<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';
require_once('connection.php');

$adminEmail = getenv('ADMIN_EMAIL');
$adminPassword = getenv('ADMIN_PASSWORD');

if (empty($email) || empty($pass)) {
    header("location:adminlog.php?Empty= Plz Enter the fields");
    exit;
}

if ($adminEmail && $adminPassword && hash_equals($adminEmail, $email) && hash_equals($adminPassword, $pass)) {
    header("location:adminhome.php?Empty= Login Sucessfull");
    exit;
}

header("location:adminlog.php?Invalid= Plz Enter Correct UserName And Password");
?>
