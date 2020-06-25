<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}
else
header("location:sign_in.php?notvalid= Plz Login to continue..!!");
?>