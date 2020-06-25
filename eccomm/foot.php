<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "ecommerce");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["Name"],  
                     'item_price'          =>     $_POST["Price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="laptop.php"</script>';  
           }  
      }  
      else  
      { 
           $item_array = array(  
                'item_id'               =>     $_GET["Id"],  
                'item_name'               =>     $_POST["Name"],  
                'item_price'          =>     $_POST["Price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eCommerce project</title>

<style type="text/css">
  a{font-size: 18px;}
</style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#" style="font-size: 22px;">eCommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Electronics</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="mobile.php">Mobiles</a>
                    <a class="dropdown-item" href="tablet.php">Tablets</a>
                    <a class="dropdown-item" href="laptop.php">Laptops</a>
                    <a class="dropdown-item" href="tv.php">Television</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navdrop" data-toggle="dropdown">Fashion</a>
                <div class="dropdown-menu dropright">
                    <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Clothing</a>
                    <ul class="dropdown-menu">
                       <li> <a class="dropdown-item" href="wfash.php">Women's Fashion</a></li>
                        <li><a class="dropdown-item" href="mfash.php">Men's Fashion</a></li>
                    </ul>
                    
                    <a class="dropdown-item" href="watch.php">Watches</a>
                    <a class="dropdown-item" href="foot.php">Foot Wear</a> 
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdrop" data-toggle="dropdown">Sports</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="cricket.php">Cricket</a>
                    <a class="dropdown-item" href="badmitton.php">Badmitton</a>
                    <a class="dropdown-item" href="football.php">Football</a> 
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control m-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light m-0 p-2" type="submit">Search</button>
            </form>

        
    </div>
    
</nav>
    
    
    <div class="container">
      <br>
     <h2 align="center">Foot Wears</h2> 
    <div class="row">
       <?php  
      $query = "SELECT * FROM products1 where Category='Foot Wear' ORDER BY Id ASC";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
    ?>

    <div class="col-md-4">
      <br>
      <form method="post" action="cart.php?action=add&id=<?php echo $row["Id"]; ?>">
      <div class="card">
        
            <div class="card-header">
                <img class="img-thumbnail" height="250" width="250"<?php echo "<img src='img/".$row['Image']."' >"; ?>
              <br>
                <a style="margin-left: 60px; font-size: 20px;" href="#"><?php echo $row["Name"]; ?></a>
            </div>
            <div class="card-body">
                
                <p>Rs <?php echo $row["Price"]; ?></p>
                <input type="number" name="quantity" class="form-control" value="1" >
            </div>

            <div class="card-footer">
                <input type="hidden" name="Name" value="<?php echo $row["Name"]; ?>"/>

                <input  type="hidden" name="Price" value="<?php echo $row["Price"]; ?>"  /> 

                <button class="btn btn-primary" type="submit" name="add_to_cart" href="cart.php" style="margin-left: 40px;">Add to cart</button>
            </div>
        </div>
        </form>
      </div>
      <?php
          }
        }
        ?>
      </div>
      <br>
      </div>
         <div class="footer bg-dark text-primary p-2 text-center">
    <strong>Crescent Tech &copy; 2019</a></strong>
</div> 
</body>
</html>

             
      