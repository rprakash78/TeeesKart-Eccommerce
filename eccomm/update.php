<?php
$pcat=$_POST['pcat'];
$pid=$_POST['pid'];
$stock=$_POST['stock'];

$conn=mysqli_connect('localhost','root','','ecommerce');
$query="UPDATE products1 SET Stock ='{$stock}' where Category='{$pcat}' and Id ='{$pid}'";

if (mysqli_query($conn,$query))
{
    header("location:modify.php?notvalid= Stock updated Sucessfully..!!");
}
else
{ 
    header("location:modify.php?notvalid= There was a problem in the update..!!");
}
?>