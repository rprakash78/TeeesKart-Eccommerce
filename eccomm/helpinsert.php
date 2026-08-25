<?php
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
if ($name == "" || $email == "" || $phone == "" || $comment == "") {
    header("location:contact.php?Empty= Plz Enter all the fields");
    exit;
}
$stmt = mysqli_prepare($conn, "INSERT INTO helpcare VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $comment);
if (mysqli_stmt_execute($stmt)) {
    header("location:contact.php?sucess= Thank you..!! we will contact u soon.");
} else {
    header("location:contact.php?Invalid= Plz Enter valid details");
}
?>
