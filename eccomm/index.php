<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  
    <title>TeeesKart</title>
    <style>
        .carousel .carousel-indicators li {
            max-width: 30px;
            height: 10px;
            border-radius: 0% !important;
            cursor: pointer;
        }
        a
        {
            font-size: 19px;
        }
        #connect
        {
            margin-top: -180px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php" style="font-size: 22px;">eCommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
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


    
<div class="container mt-5">

<div class="row">
    <div class="col-md-9">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">  </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active animated rotateIn">
                    <img src="img/ecom2.jpg" height="400" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                    <br>
                         <p class="text-primary lead bg-white">One Place To buy all Your needs</p>
                    </div>
                </div>
            <div class="carousel-item animated slideInUp">
                <img src="img/ecom6.jpg" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    
                    <p class="text-primary lead bg-white">India's Largest eCommerce Site</p>
                </div>
            </div>
            <div class="carousel-item animated slideInDown">
                <img src="img/ecom4.jpg" height="400" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    
                    <p class="text-primary lead bg-white">Buy any where from India</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div class="col-md-3">
        <h5>Become a Subscriber</h5>
        <small>Get free updates on the latest products and discounts, straight to your inbox.</small>
        
        <form action="#" method="post">
            <input type="email" name="email" placeholder=" Your Email">
            
            <button class="btn btn-primary" type="submit" name="submit" style="margin-bottom: -20px;">submit</button> 
        </form>
    </div>
</div>
<?
    include('connection.php');
    
    $query = "INSERT INTO email(email)

    VALUES

    ('$_POST[email]')";
    
?>      

</div>
    
</div>
</div>
</div>
<div class="content" style="margin-left:123px;">
<br><h3>Ecommerce System</h3>
<p>e-Commerce, also known as e-Business, or electronic business, is simply the sale and purchase of services and goods over an electronic medium, like the Internet. It also involves electronically transferring data and funds between two or more parties. Simply put, it is online shopping as we commonly know it.</p>

<p>e-Commerce started way back in the 1960s when organizations began to use Electronic Data Interchange (EDI) to transfer documents of their business back and forth. The 1990s saw the emergence of online shopping businesses, which is quite a phenomenon today.</p>

<p>It has become so convenient and easy, that anyone can shop for anything right from a living room, with just a few clicks. This has evolved more with the emergence of smartphones, where now, you can shop from anywhere and anytime, with a wireless device connected to the Internet. Now you can search for almost any product or service online, without having to go anywhere physically.</p>
</div>
 <div class="row-fluid" style="margin-left: 120px;">
        <div class="col-md-8">
            <iframe width="140%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.118180117188!2d80.19379191430546!3d13.091695915775071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52640f754332dd%3A0x14d3a791da2c2947!2sCrescent+Technosoft!5e0!3m2!1sen!2sin!4v1562157242588!5m2!1sen!2sin&key=AIzaSyAmwejKvm08-LtIz4zRpkHg4fwA-GM3k9c"></iframe>
        </div>
        
        <div class="col-md-4">
            <br>
            <address>
                <strong>CRESCENT TECHNOSOFT</strong><br>
                725-C,W-Block,<br>
                East Gate Road, Anna Nagar West<br>
                Chennai - 600 101<br>
                Tamil Nadu, India.<br>
                <abbr title="Phone">Phn:</abbr> (+91) 8870532269<br>
                <abbr title="Email address">Email:</abbr> info@crescenttechnosoft.com
            </address>
        </div>
    </div>
    <div id="connect">
    <strong style="margin-left: 580px;">FOLLOW US</strong>
<div class="social" style="margin-left: 500px;">
  <a href="#" id="share-fb" class="sharer button"><i class="fa fa-3x fa-facebook-square"></i></a>
  <a href="#" id="share-tw" class="sharer button"><i class="fa fa-3x fa-twitter-square"></i></a>
  <a href="#" id="share-li" class="sharer button"><i class="fa fa-3x fa-linkedin-square"></i></a>
  <a href="#" id="share-gp" class="sharer button"><i class="fa fa-3x fa-google-plus-square"></i></a>
  <a href="#" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
</div>
</div>

<!-- BODY ENDS -->
    <script>
    $('.carousel').carousel({
        interval:5000,
        pause:'hover'
    });
    </script>
    
</body>
</html>