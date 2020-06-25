<?php 
$conn = mysqli_connect("localhost", "root", "","ecommerce");
 if ($conn) { echo "Success"; } 
 $sql="create table Registration(Name varchar(40), Email varchar(40) PRIMARY KEY, Password varchar(30), Phone varchar(12))";
  if(mysqli_query($conn,$sql)) 
 {
	 echo "Table created Sucessfully"; 
	 } 
else 
{ 
echo mysqli_error($conn); 
}
 mysqli_close($conn);
?>
