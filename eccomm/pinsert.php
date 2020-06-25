<?php 
$pcat=$_POST['pcat'];
$pid=$_POST['pid'];
$name=$_POST['pname'];
$image=$_POST['pimg'];
$price=$_POST['price'];
$stock=$_POST['stock'];


$conn=mysqli_connect('localhost','root','','ecommerce');
$query="insert into products1 values('{$pcat}','{$pid}','{$name}','{$image}','{$price}','{$stock}')";

if (mysqli_query($conn,$query))
{
	echo "<h2>PRODUCT ADDED SUCESSFLLY..!!</h2>";
	header("refresh:1,url=admin1.php");
}
else 
	echo "<h2>Failed</h2>";
?>
