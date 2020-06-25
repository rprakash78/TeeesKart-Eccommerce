<?php
$cdno = $_POST['cardno'];
$exp = $_POST['expiry'];
$cvv = $_POST['cvv'];
$cname = $_POST['cname'];

$ip1 = strlen($cdno);
$ip2 = strlen($cvv);
if($ip1==16 && $ip2==3)
{
	echo "<br><br<br><center><img src ='https://www.worldofdogtraining.com/wp-content/uploads/2019/02/PE-Success-Icon.png' width='500px'; height='300px'></center></img>";
	echo "<br><h1><center>Your Order has been placed sucessfully..!!</center></h1>";
	header("refresh:2,url=index.php");
}
else
{
	echo "<br><br<br><center><img src ='http://www.leadernetworks.com/wp-content/uploads/2013/12/failure.jpg' width='500px'; height='300px'></img><center>";
	echo "<br><h1><center> OOPS The order was not success..!! Please try again.</center></h1>";
	header("refresh:2,url=payment.php");
}
?>