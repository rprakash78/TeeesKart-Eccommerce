<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phn=$_POST['phn'];
$conn=mysqli_connect('localhost','root','','ecommerce');
$query="insert into registration values('{$name}','{$email}','{$pass}','{$phn}')";
if (mysqli_query($conn,$query))
{
	if ($name!=""||$email!=""||$pass!="")
	{
	echo "<h2>Account Registered Sucessfully!</h2>";
    }
    else
    {
    	echo "<h2>Please Fill all the details</h2>";
    }
}
else 
	echo "<h2>Account Registration Failed</h2>";
?>
