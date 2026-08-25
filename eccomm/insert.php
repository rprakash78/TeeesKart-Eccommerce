<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$phn = isset($_POST['phn']) ? $_POST['phn'] : '';
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (!$conn) {
    echo "<h2>Account Registration Failed</h2>";
    exit;
}
if ($name == "" || $email == "" || $pass == "") {
    echo "<h2>Please Fill all the details</h2>";
    exit;
}
$stmt = mysqli_prepare($conn, "INSERT INTO registration VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $pass, $phn);
if (mysqli_stmt_execute($stmt)) {
    echo "<h2>Account Registered Sucessfully!</h2>";
} else {
    echo "<h2>Account Registration Failed</h2>";
}
?>
