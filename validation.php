<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
{
    echo"connection successfull";
}
else
{
    echo"no connection";
}
mysqli_select_db($con,'proj'); 
$email=$_POST['email'];
$pass=$_POST['password'];
$q="select * from signin where email='$email' && password='$pass' ";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
$_SESSION['username']=$email;
    header('location:home.php');
}
    else
{
        header('location:login.php');
    }


?>