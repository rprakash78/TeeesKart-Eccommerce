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
    $insert = mysqli_prepare($conn, "INSERT INTO admin (customer_name, ph_no, category_id, productname, qty) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($insert, "sssss", $name, $ph_no, $category_id, $product, $qty);

    if(mysqli_stmt_execute($insert)){
        $quantity=0;
        $select = mysqli_prepare($conn, "SELECT qty FROM stock WHERE productname = ?");
        mysqli_stmt_bind_param($select, "s", $product);
        mysqli_stmt_execute($select);
        $result = mysqli_stmt_get_result($select);
    
        if($row=mysqli_fetch_assoc($result))
            $quantity=$row["qty"];
            $newQty=$quantity-$qty;
    
            $update = mysqli_prepare($conn, "UPDATE stock SET qty = ? WHERE category_id = ?");
            mysqli_stmt_bind_param($update, "is", $newQty, $category_id);
            mysqli_stmt_execute($update);
	       echo "new record in data base";
        } else{
	       echo "Error inserting record<br>" . mysqli_error($conn);

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