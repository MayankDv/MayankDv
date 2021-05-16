<!DOCTYPE html>
<html>
<head>
<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1 class="text-center">Welcome to online quizz</h1>
<div class="row">
<div class="col-lg-6">
    <div class="card">
    <h2 class="text-center card-header">Login form</h2>
<form action="validation.php" method="post">
    <div class="form-group"> 
<label> email </label>
<input type="text" name="email" class="form-control">
    </div>
    <div class="form-group"> 
<label> Password </label>
<input type="Password" name="password" class="form-control">
    </div>    
    <button type="submit" class="btn btn-primary">Login </button>
    
    <a href="signin.php">Don't have an account? click here to register</a>    

    </form>
        </div>
    </div>
</div>
</div>    
</body>
</html>


