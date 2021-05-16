<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');    
}
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'quizdbase');
?>

<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <h1 class="text-center text-primary">Welcome to php quiz</h1>
    <h2 class="text-center text-success"></h2>
    <div class="col-lg-8 m-auto d-block">
        <div class="card">
        
        <h3 class="text-center card-header"> The rule is easy you have to select any one of the 4 options Good luck :) </h3>
        
        </div><br>
        <form action="check.php" method="post">

        <?php
for($i=1;$i<4;$i++)
{           
            $q="select * from questions where qid=$i";
$query=mysqli_query($con, $q);
while ($rows= mysqli_fetch_array($query)){      
        ?>
        <div class="card">
        <h4 class="card-header"><?php echo $rows['question']?> </h4>
                    

            <?php
        $q="select * from answers where ans_id=$i";
$query=mysqli_query($con, $q);
while ($rows= mysqli_fetch_array($query)){      
            ?>
            <div class="card-body">
            <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
                <?php echo $rows['answer']; ?>
            
            </div>

            
            
        <?php
        }
}
}
            
        ?>
            
            <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
            </div>
            </form>            
            
        </div><br><br>
        <div class="m-auto d-block"><br>
        <a href="logout.php" class="btn btn-primary">Logout</a>    
        </div>
        <br><br>
        <div>
        <h6 class="text-center">@Mayank php quiz</h6>
        </div><br><br>
        </div>
    
    
    
    </body>
</html>