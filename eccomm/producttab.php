<?php 
$conn = mysqli_connect("localhost", "root", "","ecommerce");
 if ($conn) { echo "Success"; } 
 $sql="create table Products(Category varchar(30) PRIMARY KEY, Id varchar(10), Name varchar(40), Image varchar(40), Price double(10,2), Quantity Int(10))";
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
