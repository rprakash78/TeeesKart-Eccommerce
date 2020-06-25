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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eCommerce project</title>

<style type="text/css">
  a{font-size: 18px;}
  p{font-size: 20px;}
  .slideanim p
  {font-size: 18px;}
  h1,h2
  {text-decoration: underline;}
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
                <a class="nav-link active" href="about.php">About us</a>
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

     <br><h1 class="text-danger">About us</h1><br>
     <p>
        <img src="Img/au.png" style="height: 300px; width: 620px;" align="right">
        Crescent Technosoft is a rapidly growing customized software development and outsourcing company with headquarters in Chennai, India. We specialize in the
        development of customized software applications and offshore software outsourcing services. Specifically, our company carries
        out customized programming, database design, client-server and internet/intranet software applications development.
        Over the years we have managed to build a solid team of software outsourcing professionals that come from various backgrounds and expand the creative potential of the company. The expertise that we posses embraces a wide range of customized programming skills involving the latest and most effective development technologies, such as Data Warehousing, Software Testing Tools, J2EE, .NET (ASP.NET, C#, VB.NET), XML and many more. This defines to a great extent, the quality and reliability of the customized software applications that we develop.
    </p>
    <div id="services" class="container-fluid text-center" >
  <h2 class="text-danger" align="center">Services Offered</h2>
  <br>
  <div class="p-3 mb-2 bg-light text-dark">
  <div class="row slideanim">
    <div class="col-sm-4" style="border-style: inset;"><br>
      <i style="font-size: 50px;" class="fa fa-power-off" aria-hidden="true"></i>
      <h4 class="text-primary">Website Design</h4>
      <p>We build websites that you will be proud of! We offer the latest in web technology!!</p>
    </div>
    <div class="col-sm-4" style="border-style: inset;"><br>
      <i style="font-size: 50px;" class="fa fa-wordpress" aria-hidden="true"></i>
      <h4 class="text-primary">Web Applications</h4>
      <p>We design and develop custom web applications across a broad range of technology platforms of operational excellence.</p>
    </div>
    <div class="col-sm-4" style="border-style: inset;"><br>
     <i style="font-size: 50px;" class="fa fa-briefcase" aria-hidden="true"></i>
      <h4 class="text-primary">Enterprise Solutions</h4>
      <p>We provide cutting-edge custom software development services to help make business operations more efficient, collaborative, and manageable.</p>
    </div>
  </div>
</div>
  <br>
  <div class="p-3 mb-2 bg-light text-dark">
  <div class="row slideanim">
    <div class="col-sm-4" style="border-style: inset;"><br>
      <i style="font-size: 50px;" class="fa fa-tree" aria-hidden="true"></i>
      <h4 class="text-primary">Content Management</h4>
      <p>Providing a single place to manage all of your content - publishing out to your audience wherever they are.</p>
    </div>
    <div class="col-sm-4" style="border-style: inset;"><br>
      <i style="font-size: 50px;" class="fa fa-certificate" aria-hidden="true"></i>
      <h4 class="text-primary">Digital Marketting</h4>
      <p>Staying ahead of the competition is getting harder. We develop Digital Marketing with intelligence to help you reach globally.</p>
    </div>
    <div class="col-sm-4" style="border-style: inset;"><br>
      <i style="font-size: 50px;" class="fa fa-mobile" aria-hidden="true"></i>
      <h4 class="text-primary">App Development</h4>
      <p>Get high-performance, profit-attracting and custom mobile apps. Take your app ideas to a new level.</p>
    </div>
  </div>
</div>

  <br><br>
</div>
    </div>
    <div class="footer bg-dark text-primary p-2 text-center">
    <strrong>Crescent Tech &copy; 2019</a></strong>
</div>
</body>
</html>

