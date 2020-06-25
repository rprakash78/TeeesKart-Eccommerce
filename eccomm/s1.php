<html>
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
     <style>
    .cc-img {
        margin: 0 auto;
    }
</style>
</head>
<body>
<div class="container">
    <div class="col-md-4">
      <br>
      <form method="post" action="#">
      <div class="card">
        
            <div class="card-header">
                <div class="row">
                        <h3 class="col text-center">Payment Details</h3><br><br>
                        <img class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
            </div>
            <div class="card-body">
                 <div class="row">
                            <div class="col-xs-10 col-md-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number"/>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 float-xs-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-10 col-md-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Name" />
                                </div>
                            </div>
            </div>

            <div class="card-footer">
              <div class="row">
                        <div class="col text-center">
                            <button class="btn btn-warning btn-lg btn-block" align="center">Process Payment</button>
                        </div>
                    </div>
            </div>
        </div>
        </form>
      </div>
</div>

    

</body>
</html>

