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
  a{font-size: 18px;}
  #form1 {
  padding: 15px;
  border-style: groove;
  background: #fff;
  display: none;
}
#form1 label {
  font-size: 18px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
       $("#formButton").click(function() {
        $("#form1").toggle();
  });
});
  </script>
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
            <li class="nav-item">
                <a class="nav-link active" href="adminhome.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
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
                <div style="clear:both"></div>  
                <br>
                <div class="container"> 
                <h3>Manage User Details</h3><br>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">User Name</th>  
                               <th width="10%">Email</th>  
                               <th width="20%">Password</th>  
                               <th width="15%">Phone</th> 
                               <th width="10%">Action</th> 
                                 
                          </tr>  
                          <?php
                          $connect = mysqli_connect("localhost", "root", "", "ecommerce");
                          if (mysqli_connect_errno())
                          {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          }

                          $result = mysqli_query($connect,"SELECT * FROM registration");
                          while($row = mysqli_fetch_array($result))
                          {
                              echo "<tr>";
                              echo "<td>" . $row['Name'] . "</td>";
                              echo "<td>" . $row['Email'] . "</td>";
                              echo "<td>" . $row['Password'] . "</td>";
                              echo "<td>" . $row['Phone'] . "</td>";
                              echo "<td><a href='#'>Remove</td>";
                              echo "</tr>";
                          }

                          mysqli_close($connect);
                          ?>
                        </table>
                      </div>
                    </div>
                  </body>
                  </html>
