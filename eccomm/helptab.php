<?php 
$conn = mysqli_connect("localhost", "root", "","ecommerce");
 if ($conn) { echo "Success"; } 
 $sql="create table Helpcare (Name varchar(40), Email varchar(40) PRIMARY KEY, Phone varchar(12), Comments varchar(50))";
  if(mysqli_query($conn,$sql)) 
 {
	 echo "Table created Sucessfully"; } 
else 
{ 
echo mysqli_error($conn); 
}
 mysqli_close($conn);
?>
