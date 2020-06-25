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
    
    <title>TeeesKart</title>
    <style type="text/css">
        #center {
  margin: auto;
  width: 60%; 
  padding: 10px;
  border-style:ridge;
  background-color:#F5CE1F;
  box-shadow:0px 0px 2px #a2a8d3;
  }
  a
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
            <li class="nav-item active">
                <a class="nav-link" href="adminlog.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registraction.php">Registration</a>
            </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control m-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light m-0 p-2" type="submit">Search</button>
            </form>

        
    </div>
    
</nav>
    <br><br><br>
<div id="center">
<div class="container mt-3">


<h3>Admin Login Form</h3><br>
    <?php
        if(@$_GET['Empty']==true){
    ?>
    
    <div class="alert-light text-danger"><?php echo $_GET['Empty'];?></div>
    
    <?php
        }
    ?>

    <?php
        if(@$_GET['sucess']==true){
    ?>
    
    <div class="alert alert-success"><?php echo $_GET['sucess'];?></div>
    
    <?php
        }
    ?>

    
    <?php
        if(@$_GET['Invalid']==true){
    ?>
    
    <div class="alert-light text-danger"><?php echo $_GET['Invalid'];?></div>
    
    <?php
        }
    ?>
    <br>
    <form class="form-group" action="adprocess.php" method="post">
        <label for="email" style="font-size: 19px;">Email id:</label>
        <input class="form-control" type="email" name="email" placeholder="Enter your Email">
        <br><label for="password" style="font-size: 19px;">Password:</label>
        <input class="form-control" type="password" name="password" placeholder="Enter your Password"><br><br>
        <input type="submit" class="btn btn-primary" value="Login">
        <a style="margin-left:40px;" href="fpwd.php" class="btn btn-primary" role="button" >Forget Password</a>
    </form>
    <br>
    <div action="redirect.php">
    <?php
        if(@$_GET['notvalid']==true){
    ?>
    
    <div class="alert-light text-danger" style="font-weight: bold;"><?php echo $_GET['notvalid'];?></div>
    
    <?php
        }
    ?>

</div>
    </div>
</body>
</html>
