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
    <title>TeeesKart</title>
    <style>
    body {
        font-family: 'PT Sans', sans-serif;
    }

    .container-fluid {
        background: url("http://www.prepbootstrap.com/Content/images/shared/misc/contact-us.png");
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100%;
    }

    hr {
        border: 1px solid #354458;
    }

    .panel {
        margin-top: 50px;
        margin-right: 10px;
    }

    .col-md-8 > button {
        display: block;
        margin: auto;
    }

    .social > a {
        width: 100%;
    }
   
</style>
</head>
<body>
    
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <br><br>
                <div class="card ">
                    <div class="card-header">
                        
                        <h2 class="text-xs-center" style="font-weight: bold;"><i class="fa fa-user-circle-o" style="font-size:36px"></i> CONTACT US</h2>
                        <hr>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-6">
                                <form align="center" method="post" action="helpinsert.php"><br>
                                    <div class="form-group row">

                                        <div class="col-md-4">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="name" name="Name" class="form-control" placeholder="Type your name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="email">E-mail</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Type your e-mail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Type your contact no">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="Comment">Views:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea class="form-control" rows="3" id="comment" name="comment" placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-8">
                                            <button  class="btn btn-primary">Submit request</button><br>
                                            <?php
                                       if(@$_GET['Empty']==true){
                                        ?>
                                        <div class="alert-light text-danger">
                                            <?php echo $_GET['Empty'];?></div>
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
                                        if(@$_GET['Invalid']==true)
                                        {
                                        ?>
                                        <div class="alert-light text-danger"><?php echo $_GET['Invalid'];?></div>
                                        <?php
                                        }
                                        ?>
                                        </div>
                                             
                                    </div>
                                       
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group row">
                                        <div class="col-xs-8 offset-xs-2 col-md-8 offset-md-3">
                                           <br> <strong style="font-size: 20px;">FOLLOW US</strong>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="social row">
                                                <div class="btn-group btn-group-justified">
                                                    <a href="#" class="btn btn-primary"><span class="fa fa-2x fa-facebook"></span></a>
                                                    <a href="#" class="btn btn-danger"><span class="fa fa-2x fa-google"></span></a>
                                                    <a href="#" class="btn btn-primary"><span class="fa fa-2x fa-linkedin"></span></a>
                                                    <a href="#" class="btn btn-info"><span class="fa fa-2x fa-twitter"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-left:30px;">
                                        <br>
                                        <address>
                                        <strong>CRESCENT TECHNOSOFT</strong>
                                        <br>
                                        725-C,W-Block,<br>
                                        East Gate Road, Anna Nagar West<br>
                                        Chennai - 600 101<br>
                                        Tamil Nadu, India.<br>
                                        Phone: (+91) 8870532269<br>
                                        Email: info@crescenttechnosoft.com
                                    </address>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

