<?php
    include('connection.php');
    $id=$_REQUEST['id'];
?>
    <form action="" method="post">
        <input type="text" name="qty_update">
        <input type="submit" name="submit" value="update">
        </form>
       <?php if(isset($_POST['submit'])){
            $qty=$_POST['qty_update'];
            $sql="select qty from stock where id='".$id."'";
            $selectresult=$conn->query($sql);
             while($row = $selectresult->fetch_assoc()) {
                $dataqty= $row['qty'];
             }
            $finalqty= $dataqty-$qty;
            $update="update stock set qty='".$finalqty."',purchase_status='1' where id='".$id."' ";
            $result = $conn->query($update);
               // echo "<script>alert('Successfully updated qty');window.location.href='goodsregister.php';</script>";
        }
?>