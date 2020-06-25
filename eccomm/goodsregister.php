<?php 

include('connection.php'); 

$query = "SELECT * FROM goodsregister";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/mdb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
    <title>eCommerce project</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">eCommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="db.php">DataBase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                </li>
                <li id="toggle" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-toggle="collapse" href="#toggle">Category</a>
                    <span class="dropdown-menu">
                        <a class="dropdown-item" href="laptop.php">Laptop</a>
                        <a class="dropdown-item" href="desktop.php">Desktop</a>
                        <a class="dropdown-item" href="smartphone.php">Smart Phones</a>
                        <a class="dropdown-item" href="tablet.php">Tablet</a>
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign_in.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registraction.php">Sign Up</a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control m-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light m-0 p-2" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
<div class="container mt-5">

<?php 
        
        $sql="select c.*,s.* from stock s left join category c on c.c_id=s.category_id";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[]= $row;
    }
} 
$conn->close();
        
?>
    
<h3>Stock Details :</h2>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Qty</th>
                <th>Purchase Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $value){?>
            <tr>
                <td><?php echo $value['productname'];?></td>
                <td><?php echo $value['category_name'];?></td>
                <td><?php echo $value['qty'];?></td>
                <td><?php if($value['purchase_status'] == '0'){echo "Not Purchased";}else{ echo "Purchased";}?></td>       <td><a href="edit.php?id=<?php echo $value['id'];?>"><input type="submit" name="sumbit" value="update"></a></td>    
            </tr>
            <?php }?>
        
        </tbody>
        
    </table>
    <br>
    <br>
    
    
    
        </body>
</html>
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>







</div>
    <br><br><br>
<div class="footer bg-dark text-secondary p-4 text-center">
    <h4>Copy rights by <a href="https://narendrareddy924.github.io/"><i class="fa fa-user-circle"></i>Narendra Reddy</a></h4>
</div>
    

<!-- BODY ENDS -->
<script src="../bootstrap/js/fontawesome-all.js"></script>
<script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="../bootstrap/js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/mdb.min.js"></script>
</body>
</html>
