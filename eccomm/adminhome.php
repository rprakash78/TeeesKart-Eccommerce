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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TeeesKart</title>
    <style type="text/css">
        #center {
  margin: auto;
  width: 60%; 
  padding: 10px;
  border-style:ridge;
  background-color:#ccc1ff;
  box-shadow:0px 0px 2px #a2a8d3;
  }
  a{font-size: 19px;}

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
            <li class="nav-item active">
                <a class="nav-link" href="admin1.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="modify.php">Modify</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:81/phpmyadmin/db_structure.php?db=ecommerce">Database</a>
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
    <br>
    <br>
    <div class="container" >
    
    <img src="https://www.pendleleisuretrust.co.uk/images/pages/hero/157.jpg" class="img-fluid">
    <br><br>
    <h4>An Administrator provides administrative support to the entire system. Duties are as follows</h4>
    <br>
   <i class="fa fa-thumb-tack" aria-hidden="true">  <a href="admin1.php" style="font-size: 20px;">ADD PRODUCTS</a></i><br>
    <i class="fa fa-thumb-tack" aria-hidden="true"> <a href="modify.php" style="font-size: 20px;">UPDATE STOCK</a></i><br>
    <i class="fa fa-thumb-tack" aria-hidden="true"> <a href="manage.php" style="font-size: 20px;">MANAGE USER</a></i><br>
    <i class="fa fa-thumb-tack" aria-hidden="true"> <a href="mdata.php" style="font-size: 20px;">MANAGE DATA</a></i><br>
    <i class="fa fa-thumb-tack" aria-hidden="true"> <a href="mcmp.php" style="font-size: 20px;">MANAGE COMPLAINT</a></i>
    </div>
</body>
</html>
