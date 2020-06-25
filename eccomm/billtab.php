<?php 
$conn = mysqli_connect("localhost", "root", "","ecommerce");
 if ($conn) { echo "Success"; } 
 $sql="create table BillAddress (Firstname varchar(40),Lastname varchar(40), Email varchar(40) PRIMARY KEY, Phone varchar(12), Country varchar(50), State varchar(50), City varchar(40), Address varchar(80))";
  if(mysqli_query($conn,$sql)) 
 {
	 echo "Table created Sucessfully"; } 
else 
{ 
echo mysqli_error($conn); 
}
 mysqli_close($conn);
?>
