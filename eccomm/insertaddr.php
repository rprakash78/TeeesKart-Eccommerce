<?php
$fname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phn = isset($_POST['phone']) ? $_POST['phone'] : '';
$country = isset($_POST['country']) ? $_POST['country'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
$addr = isset($_POST['address']) ? $_POST['address'] : '';

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
$stmt = mysqli_prepare($conn, "INSERT INTO billaddress VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $lname, $email, $phn, $country, $state, $city, $addr);

if (mysqli_stmt_execute($stmt)) {
    header("location:payment.php");
} else {
    header("location:cart.php?Invalid= Plz Enter valid details");
}
?>
