<?php
$email=$_POST['email'];
$pass=$_POST['password'];
require_once('connection.php');

        if(empty($email) || empty($pass))
        {
            header("location:adminlog.php?Empty= Plz Enter the fields");
        }
        elseif ($email=="rpramesh98@gmail.com" && $pass=="prakash1212") {
            header("location:adminhome.php?Empty= Login Sucessfull");
        }
        else{
                header("location:adminlog.php?Invalid= Plz Enter Correct UserName And Password");
            }
?>