<?php
$con=mysqli_connect("localhost","root","","mypro") or die("echo not connected");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
</head>
<body>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"href="styleslandingandcourse.css">
    <link rel="stylesheet"href="dashboard.css">
    
</head>
<body>
    <div class="nav fixed-top">
        <div class="container">
            <div class="row">
             <div class="col"><div class="div"><h1 class="text-primary">Tost Training Academy</h1></div></div>   
               <div class="col-sm-4"> <div class="div p-3"><a href="adminregister.php">Register</a><a href="studentregister.php">Student</a>/<a href="trainerregister.php">Trainer</a> <a href="#"></a></div></div>
            </div>
        </div>    

    </div>    


    <!--second section-->>


    <form action="checkloginadmin.php"method="POST" class="fami">
        <legend class="text-white">Admin Login</legend>
     
           
            <div>
                <div><label for="name" class="text-primary">Name</label></div>
                <div><input type="text"name="name"placeholder="Enter your name" class="form-control"></div>
            </div>

           

          
            <div>
                <div><label for="password"class="text-primary">Password</label></div>
                <div><input type="password"name="password"placeholder="Enter Password" class="form-control"></div>
            </div>

            <div>
                
                <button class="btn- btn-success form-control text-center text-white ki my-3" type="submit">Login</button>
            </div>

            <div><a href="text-danger text-lg text-center">Forgot password?</a></div>

        
    </form>
  
    


    
</body>
</html>