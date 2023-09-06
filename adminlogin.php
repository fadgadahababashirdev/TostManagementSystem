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
             <div class="col"><div class="div"><a href="index.php"class="text-white">Tost Training Academy</a></div></div>   
           
            </div>
        </div>    

    </div>    


    <!--second section-->>


    <form action="checkloginadmin.php"method="post"class="border shadow rounded p-3 bg-white"style="width:450px;height:440px;">
        <h1 class="text-center">Login</h1>

       
           

        
            <div>
                <label for="email"class="form-label">Email <input type="text"name="email"id="username"placeholder="email"class="form-control" style="width:420px;"></label>
            </div>
            
            <div>
                <label for="password"class="form-label">password <input type="password"name="password"id="password"placeholder="password"class="form-control"style="width:420px;></label>
            </div>

            <div>
               <label for="user type" class="form-label"><!--Login As--></label
               <select type="hidden"name="role" id="user type"class="form-select mb-2" >
               <!-- <option  selected value="Student">Student</option>
                <option value="Admin">Admin</option>
                <option value="trainer">Trainer</option>-->
               </select>
               
            </div>

            <div class="d-flex justify-content-between">
                        <div><button type="submit"name="save"class="btn-md btn-primary rounded">Login</button></div>
                        <div><a href="adminregister.php">Register</a></div>
            </div>
            
        </form>

  
    


    
</body>
</html>