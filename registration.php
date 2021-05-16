<?php
session_start();
//header('location:login.php');
$con=mysqli_connect('localhost','root');
if($con)
{
}
else
{
    echo"no connection";
}
mysqli_select_db($con,'proj');
$name=$_POST['name1'];
$email=$_POST['email'];
$pass=$_POST['password'];
if(empty($_POST['name1']))
{
    echo "Error: Name is required<br />";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
  echo"Error: Only letters and white space allowed in name please type again";
}
else if (empty($_POST["email"])) 
{
    echo "Error: Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
      echo "Error: Invalid email format";
    }
elseif(empty($_POST['password']))
{
    echo "Error: password is required <br />";
}
else{
$q="select * from signin where email='$email' && password='$pass'  && name='$name'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
    echo"username already exist please write something else";
}
    else
{   
    $qy="insert into signin(name,password,email) values('$name','$pass','$email')";
mysqli_query($con,$qy); 
    }

   echo "<script type=\"text/javascript\">".
        "alert('registration successfull');".
        "</script>";
echo '<a href="login.php">click here to login now</a>';
}
?>