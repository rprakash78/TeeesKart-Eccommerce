<?php 
$name=$_POST['Name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];


$conn=mysqli_connect('localhost','root','','ecommerce');
$query="insert into helpcare values('{$name}','{$email}','{$phone}','{$comment}')";
if($name==""||$email==""||$phone==""||$comment=="") 
{
	header("location:contact.php?Empty= Plz Enter all the fields");
}
elseif(mysqli_query($conn,$query))
{
	header("location:contact.php?sucess= Thank you..!! we will contact u soon.");
}
else 
	header("location:contact.php?Invalid= Plz Enter valid details");
?>
