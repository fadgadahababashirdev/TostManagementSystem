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
               <div class="col-sm-4"> <div class="div p-3"><a href="Adminlogin.php"class="">LOGIN/<a href="studentregister.php">Student</a>/<a href="trainerregister.php">Trainer</a><br> <a href="landing page.php">Home</a></div></div>
            </div>
        </div>    

    </div>    


    <!--second section-->>


    <form action="#"method="POST" class="fami">
        <legend class="text-white">Course Register</legend>
     
           <input type="hidden"name="cid">
            <div>
                <div><label for="name" class="text-primary">Course name</label></div>
                <div><input type="text"name="name"placeholder="Enter Course name" class="form-control"></div>
            </div>

            <div>
                <div><label for="name"class="text-primary">Course Trainer</label></div>
                <div><input type="text"name="email"placeholder="Enter " class="form-control"></div>
            </div>
            <div>
                <div><label for="name"class="text-primary">Phone</label></div>
                <div><input type="tel"name="phone"placeholder="Enter your phone" class="form-control"></div>
            </div>

        

            <div>
                <div><label for="name"class="text-primary">Gender</label></div>
                <div><select name="gender" id="gend" class="form-control ki">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select></div>
            </div>
            
                    
            <div>
                <div><label for="password"class="text-primary">Password</label></div>
                <div><input type="text"name="password"placeholder="Enter Password" class="form-control"></div>
            </div>
            <div>
                
                <button class="btn- btn-success form-control text-center text-white ki my-3" type="submit">submit</button>
            </div>

        
    </form>
  
    


    
</body>
</html>