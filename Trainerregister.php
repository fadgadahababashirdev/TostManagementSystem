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
               <div class="col-sm-4"> <div class="div p-3"><a href="trainerlogin.php"class="">LOGIN/<a href="studentregister.php">Student</a><a href="index.php">Home</a></div></div>
            </div>
        </div>    

    </div>    


    <!--second section-->


    <form action="#"method="POST" class="fami">
        <legend class="text-white">Trainer Register</legend>
        <input type="hidden"name="tid">
     
           
            <div>
                <div><label for="name" class="text-primary">Name</label></div>
                <div><input type="text"name="tname"placeholder="Enter your name" class="form-control"></div>
            </div>

            <div>
                <div><label for="name"class="text-primary">Email</label></div>
                <div><input type="Email"name="temail"placeholder="Enter your email" class="form-control"></div>
            </div>
            <div>
                <div><label for="name"class="text-primary">Phone</label></div>
                <div><input type="tel"name="tphone"placeholder="Enter your phone" class="form-control"></div>
            </div>

            <!--<div>
                <div><label for="name"class="text-primary">Course</label></div>
                <div><input type="text"name="tcourse"placeholder="Enter Course" class="form-control"></div>
            </div>-->

            <div>
                <div><label for="name"class="text-primary">Gender</label></div>
                <div><select name="tgender" id="gend" class="form-control ki">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select></div>
            </div>
            
                    
            <div>
                <div><label for="password"class="text-primary">Password</label></div>
                <div><input type="password"name="tpassword"placeholder="Enter Password" class="form-control"></div>
            </div>
            <div>
                
                <input class="btn- btn-success form-control text-center text-white ki my-3" type="submit"name="save"value="submit">
                </div>
    
        
    </form>
  
    


    
</body>
</html>


<?php
if(isset($_POST['save'])){
    $tid=$_POST['tid'];
    $tname=$_POST['tname'];
    $temail=$_POST['temail'];
    $tphone=$_POST['tphone'];
    $tgender=$_POST['tgender'];
  
    $tpass=$_POST['tpassword'];
    /*$tcourseid=$_POST['courseid'];*/

    $ins=mysqli_query($con,"INSERT INTO trainer(tid,tname,temail,tphone,tgender,tpassword /*,tcourseid*/)VALUES('$tid','$tname','$temail','$tphone','$tgender','$tpass'/*,'$tcourseid'*/)");
    if($ins){
        echo "<script>alert('inserted')</script>";
    }
    else{
        echo "<script>alert('denied')</script>";
    }
}
?>