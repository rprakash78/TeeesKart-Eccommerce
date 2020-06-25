<?php 

include('connection.php'); 

$query = "SELECT * FROM admin";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/mdb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table{
        width: 100%;
    }
	table,tr,td,th{
		background-color: lightblue;
		border: 2px solid red;
		text-align: center;
		border-collapse: collapse;
		padding: 9px;
	}    
</style>
<body>
    
    <h1>User & Stock Details</h1>
    

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="form-group" action="insert1.php" method="post">
                <input class="form-control" type="text" name="customer_name" placeholder="Customer Name" required>
                <input class="form-control" type="tel" min="10" maxlength="10" name="ph_no" placeholder="Customer Ph Number" required>
                <input class="form-control" type="number" name="category_id" placeholder="Category Id" required>
                <input class="form-control" title="text" name="productname" placeholder="Product Name" required>
                <input class="form-control" type="number" name="qty" placeholder="How much Quantity" required>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
    
    
    
    
    
    
    <div>
        <span class="btn btn-warning"><a href="goodsregister.php">Availability Stock</a></span>
        <span class="display-5 text-warning">--> To know the Availability Quantity Click Here</span>
    </div>
    <br><br><br>
    
    
    
    
    <?php

    include('connection.php');
    $query = "SELECT * FROM admin";
    $result = mysqli_query($conn, $query);
    
if (mysqli_num_rows($result) > 0 ) {
	 # we have data
	// output the data
    echo "<h1>Customer Details :</h1>";
	echo "<table><tr><th>ID</th><th>UserName</th><th>Ph Number</th><th>Category Id</th><th>Product Name</th><th>quantity</th></tr>";

	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id"]."</td><td>".$row["customer_name"]."</td><td>".$row["ph_no"]."</td><td>".$row["category_id"]."</td><td>".$row["productname"]."</td><td>".$row["qty"]."</td></tr>";
	}

	echo "</table>";
} else {
	echo "whoops! no result found";
}

mysqli_close($conn);

?>

    
    
    
<!-- BODY ENDS -->
<script src="../bootstrap/js/fontawesome-all.js"></script>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/mdb.min.js"></script>
    
    
</body>
</html>