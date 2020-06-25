<?php 
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$phn=$_POST['phone'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$addr=$_POST['address'];


$conn=mysqli_connect('localhost','root','','ecommerce');
$query="Insert into billaddress values('{$fname}','{$lname}','{$email}','{$phn}','{$country}','{$state}','{$city}','{$addr}')";

if (mysqli_query($conn,$query))
{
	header("location:payment.php");
    
}
else
{ 
	header("location:cart.php?Invalid= Plz Enter valid details");;
}
?>
