<?php 

include('connection.php'); 

//if you refresh in the browser it saves the data how many times you refreshed.

// $query = "INSERT INTO registraction (id, username, password, email, signup_date, address)
// VALUES(NULL, 'sai', 'sai ', 'sai123@gmail.com', CURRENT_TIMESTAMP, 'Hello sai welcome to // hyderabad.')";
if(isset($_POST["submit"]))
{
    $name= $_POST["customer_name"];
    $ph_no= $_POST["ph_no"];
    $category_id= $_POST["category_id"];
    $product= $_POST["productname"];
    $qty = $_POST["qty"];
    $query1 = "INSERT INTO admin (customer_name, ph_no, category_id, productname, qty)"

        ."VALUES"."('".$name."','".$ph_no."','".$category_id."','".$product."','".$qty."')";


    if(mysqli_query($conn, $query1)){
        $quantity=0;
        $query="select qty from stock where productname=".$product;
        $result=mysqli_query($conn,$query);
    
        if($row=mysqli_fetch_assoc($result))
            $quantity=$row["qty"];
            $newQty=$quantity-$qty;
    
            $query="update stock set qty=".$newQty." where category_id=".$category_id;
            mysqli_query($conn,$query);
	       echo "new record in data base";
        } else{
	       echo "Error: ".$query1. "<br>" . mysqli_error($conn);

        }
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/fontawesome-all.css">
</head>
<body>

<h1>MySQL Insert</h1>

</body>
</html>