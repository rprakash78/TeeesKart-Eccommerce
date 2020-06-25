<?php
$email=$_POST['email'];
$pass=$_POST['password'];
require_once('connection.php');

        if(empty($email) || empty($pass))
        {
            header("location:sign_in.php?Empty= Plz Enter the fields");
        }
        else{
            $query= "select * from registration where Email='".$_POST['email']."' and Password='".$_POST['password']."'";
            $result= mysqli_query($conn, $query);
            if(mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION['username']=$email;
                header("location:index.php?sucess= Login Sucessfull..!!");
            }else{
                header("location:sign_in.php?Invalid= Plz Enter Correct UserName And Password");
            }
        }
?>