<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
    .animateuse{
    animation:leelaanimate 0.5s infinite;
    }
@keyframes leelaanimate
    {
    0%{color:red},
    10%{color:yellow},
    20%{color:blue},
    40%{color:green},
    50%{color:pink},
    60%{color:orange},
    80%{color:black},
    100%{color:brown},
    }
        
        </style>
    </head>
    <body>
        <div class="container text-center">
            <br><br>
            <h1 class="text-center text-success text-uppercase animateus">PHP quiz</h1>
            <br><br><br><br>
            <table class="table text-center table-bodered table-hover">
                <tr>
                <th colspan="2" class="bg-dark"><h1 class="text-white">Results</h1></th>
                </tr>
                <td>
                Questions Attempted
                </td>
<?php
if(!isset($_SESSION['username'])){
header('location:login.php');    
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');
if(isset($_POST['submit']))
{
if(!empty($_POST['quizcheck'])){
    $count=count($_POST['quizcheck']);
    ?>
<td>
    <?php
    echo "Out of 3, you have answered ".$count." questions";
?>
    </td> 
                <?php
    $result=0;
    $i=1;
    $selected=$_POST['quizcheck'];
    $q="select * from questions";
    $query=mysqli_query($con,$q);
    
    while($rows=mysqli_fetch_array($query)){
error_reporting(E_ERROR | E_WARNING | E_PARSE);    
$checked=$rows['ans_id']==$selected[$i];
    if($checked)
    {
        $result++;
    }
    $i++;
    }
    ?>
    <tr>
    <td>
        Your total score is
        </td>
        <td colspan="2">
            <?php
    echo $result; 
}
else
{
    echo "<b>please select atleast one option.</br>";
}
}
                ?>
        </td>
                </tr>
                <?php
$name=$_SESSION['username'];
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$finalresult="insert into user(username,totalques,answerscorrect) values('$name','3','$result')";                    
$queryresult=mysqli_query($con,$finalresult);
?>
    <tr>
        <td>
            <?php
            echo '<a href="home.php">click here to take the quiz again</a>';
            ?>
            </td>
    <td>
        <div class="m-auto d-block align="><br>
        <a href="logout.php" class="btn btn-primary">Logout</a>    
        </div>         
        </td>
            </table>
        </div>
    </body>
    </html>