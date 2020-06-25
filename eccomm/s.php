  <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "ecommerce");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
            $item_id               =    $_GET["id"];  
            $item_name               =     $_POST["Name"];  
            $item_price          =     $_POST["Price"];  
            $item_quantity          =     $_POST["quantity"];      
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {    
                $item_id               =    $_GET["Id"];  
                $item_name               =     $_POST["Name"];  
                $item_price          =   $_POST["Price"];  
                $item_quantity          =     $_POST["quantity"];  
             
      }    
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
             
             
                if($item_id == $_GET["id"])  
                {  
                       
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
             
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Simple PHP Mysql Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style type="text/css">
             
           </style>
      </head>  
      <body> 
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                                 
                          ?>  
                          <tr>  
                               <td><?php echo $item_name ?></td>  
                               <td><?php echo $item_quantity; ?></td>  
                               <td>$ <?php echo $item_price ?></td>  
                               <td>Rs <?php echo number_format($item_quantity * $item_price); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($item_quantity * $item_price);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Rs <?php echo number_format($total); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                            
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />
         </body>
         </html>