<?php
$pcat = isset($_POST['pcat']) ? $_POST['pcat'] : '';
$pid = isset($_POST['pid']) ? $_POST['pid'] : '';
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
$stmt = mysqli_prepare($conn, "UPDATE products1 SET Stock = ? WHERE Category = ? AND Id = ?");
mysqli_stmt_bind_param($stmt, "sss", $stock, $pcat, $pid);

if (mysqli_stmt_execute($stmt)) {
    header("location:modify.php?notvalid= Stock updated Sucessfully..!!");
} else {
    header("location:modify.php?notvalid= There was a problem in the update..!!");
}
?>
