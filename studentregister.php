<?php
$con=mysqli_connect("localhost","root","","mypro") or die("not connected");

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
               <div class="col-sm-4"> <div class="div p-3"><a href="studentlogin.php"class="">LOGIN/<a href="#">Student</a>/<a href="trainerregister.php">Trainer</a><br> <a href="checkcourse.php">Course</a>
               <a href="dashboard.php"class="text-white text-lg"></a></div></div>
            </div>
        </div>    

    </div>    


    <!--second section-->>


  


    <form action="#"method="POST" class="fami">
        <legend class="text-white">Student Register</legend>
        <input type="hidden"name="sid">
     
           
            <div>
                <div><label for="name" class="text-primary">Name</label></div>
                <div><input type="text"name="name"placeholder="Enter your name" class="form-control"required></div>
            </div>

            <div>
                <div><label for="name"class="text-primary">Email</label></div>
                <div><input type="Email"name="email"placeholder="Enter your email" class="form-control"required></div>
            </div>
            <div>
                <div><label for="name"class="text-primary">Phone</label></div>
                <div><input type="tel"name="phone"placeholder="Enter your phone" class="form-control"required></div>
            </div>

           
            <div>
                <div><label for="name"class="text-primary">Gender</label></div>
                <div><select name="gender" id="gend" class="form-control ki">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select></div>
            </div>

            <div>
                <div><label for="name"class="text-primary">Course</label></div>
                <div><input type="text"name="courseid"placeholder="Enter Course" class="form-control"required></div>
            </div>

            <div>
                <div><label for="password"class="text-primary">Password</label></div>
                <div><input type="password"name="password"placeholder="Enter Password" class="form-control"required></div>
            </div>

            <div>
                
            <input class="btn- btn-success form-control text-center text-white ki my-3" type="submit"name="save"value="submit">
            </div>

        
    </form>

   
  
    


    
</body>
</html>

<?php
if(isset($_POST['save'])){
    $sid=$_POST['sid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $courseid=$_POST['courseid'];
    $pass=$_POST['password'];

    $ins=mysqli_query($con,"INSERT INTO student(sid,name,email,phone,gender,courseid,password)VALUES('$sid','$name','$email','$phone','$gender','$courseid','$pass')");
    if($ins){
        echo "<script>alert('inserted')</script>";
    }
    else{
        echo "<script>alert('denied')</script>";
    }
}
?>