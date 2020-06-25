<?php 

include('connection.php'); 

$query = "SELECT * FROM registraction";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="C:\bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="C:\bootstrap-4.3.1-dist\js\bootstrap.min.js"></script>
</head>

    <title>TeeesKart</title>
    <style>
        ::placeholder{
            text-align: center;
        }
        #center {
  margin: auto;
  width: 120%; 
  padding: 10px;
  border-style:ridge;
  background-color:#F5CE1F;
  box-shadow:0px 0px 2px #a2a8d3;
  }
    a
   {
    font-size: 19px;
    }
    #aa label
    {
        font-size: 19px;
    }

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
                    <a class="nav-link" href="redirect.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Electronics</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="mobile.php">Mobile Phones</a>
                    <a class="dropdown-item" href="tablet.php">Tablets</a>
                    <a class="dropdown-item" href="laptop.php">Laptops</a>
                    <a class="dropdown-item" href="tv.php">Television</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navdrop" data-toggle="dropdown">Fashion</a>
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
                <a class="nav-link" href="adminlog.php">Admin</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="registraction.php">Registration</a>
            </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="sign_in.php">Login</a>
                </li>
                
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control m-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light m-0 p-2" type="submit">Search</button>
            </form>

        
    </div>
    
</nav>
    

<div class="container mt-5">


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div id="center">
        <h1 class="text-center">Register Here</h1>
        <form action="insert.php" method="post" id="aa">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" name="pass" placeholder="Your Password" required>
        </div>
        <div class="form-group">
            <label for="Phone">Phone:</label>
            <input class="form-control" type="number" name="phn" placeholder="Your Ph Number" size="10" required>
         </div> 
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label><br>
               <p class="text-center" style="font-size: 18px;">If Already Existed <a href="sign_in.php" style="color: red;">login Here</a></p>
            </div>
            <button type="submit" class="btn btn-primary m-auto">Submit</button>
        </div>
        </form>
       </div>
    </div>
</div>
<br><br>
<div class="footer bg-dark text-primary p-2 text-center">
    <strrong>Crescent Tech &copy; 2019</a></strong>
</div>

</body>
</html>
