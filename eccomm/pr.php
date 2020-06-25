<?php
$conn=mysqli_connect('localhost','root','','ecommerce');
      $query = "SELECT Stock FROM products1 where Id='t3'";  
      $result = mysqli_query($conn, $query);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      echo $row['Stock'];
        
?>

<!--
$conn=mysqli_connect('localhost','root','','Hospital');
$query="select password from login1 where username='{$username}'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$p=$row['password'];