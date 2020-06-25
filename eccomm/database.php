<?php
$conn=mysqli_connect("localhost","root","");
if ($conn)
 {
 echo"Database Created";
 }
 
$sql = "CREATE DATABASE ecommerce";
if (mysqli_query($conn, $sql)) 
{
    echo "Database created successfully";
} else
{
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
