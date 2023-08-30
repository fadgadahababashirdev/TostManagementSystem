<?php
$con=mysqli_connect("localhost","root","","mypro")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"href="dashboard.css">
</head>
<body>
    <div class="container-fluid co">
        <div class="container d-flex togo fixed-top">
            <div class="col-sm-8">Tost Training Academy</div>
            <div class="col-sm-4"><a href="logout.php">LOGOUT</a></div>
        </div>


        <div class="d-flex bg-white p-5">
             <div class="col-sm-3 bg">
                <div class="die"><a href="dashboard.php">Home</a></div>
                <div class="die"><a href="registerstudentbyadmin.php">Register Student</a></div>
                <div class="die"><a href="registertrainerbyadmin.php">Register trainer</a></div>
                <div class="die"><a href="registercoursebyadmin.php">Register Course</a></div>
            </div>
            <div class="col-sm-4 bg-info dass">Admin dashboard
               <div class="d-flex justify-content-around my-5">
                <div class="border p-5 border-primary rounded">
                    <div>
                        <h6>Trainees</h6>
                        <p>12</p>
                    </div>
                </div>
                <div class="border p-5 border-primary rounded">
                    <div>
                        <h6>Courses</h6>
                        <p>8</p>
                    </div>

                </div>
                
               </div> 
               <div class="d-flex justify-content-around my-5">
                <div class="border p-5 border-primary rounded">
                    <div>
                        <h6>Trainers</h6>
                        <p>2</p>
                    </div>
                   
                </div>
                <div class="border p-5 border-primary rounded">
                    <div>
                        <h6>Graduates</h6>
                        <p>12</p>
                    </div>
                </div>
               </div>
            </div>

                   <div class="col-sm-5">
                        
                                <form action="#"method="POST"style="margin-left:12px;margin-top:12px;">
                                        <legend class="text-primary">Trainer Register</legend>
                                        <input type="hidden"name="tid">
                        
                            
                                <div>
                                    <div><label for="name" class="text-primary">Name</label></div>
                                    <div><input type="text"name="tname"placeholder="Enter your name" class="form-control"required></div>
                                </div>

                                <div>
                                    <div><label for="name"class="text-primary">Email</label></div>
                                    <div><input type="Email"name="temail"placeholder="Enter your email" class="form-control"required></div>
                                </div>
                                <div>
                                    <div><label for="name"class="text-primary">Phone</label></div>
                                    <div><input type="tel"name="tphone"placeholder="Enter your phone" class="form-control"required></div>
                                </div>

                            

                                <div>
                                    <div><label for="name"class="text-primary">Gender</label></div>
                                    <div><select name="tgender" id="gend" class="form-control ki"style="width:465px;">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select></div>
                                </div>

                                <div>
                                    <div><label for="name"class="text-primary">Trainerid</label></div>
                                    <div><input type="text"name="tcid"placeholder="Enter Course id" class="form-control"required></div>
                                </div>
                               

                                <div>
                                    
                                <input class="btn- btn-success form-control text-center text-white ki my-3" type="submit"name="save"value="submit">
                                </div>

                            
                             </form>

                            </div>
                     
                 </div>
    </div>
    
</body>
</html>

<?php 
if(isset($_POST['save'])){
    $tid=$_POST['tid'];
    $name=$_POST['tname'];
    $email=$_POST['temail'];
    $phone=$_POST['tphone'];
  
    $gender=$_POST['tgender'];
    $tcid=$_POST['tcid'];
   
    $ins=mysqli_query($con,"INSERT INTO trainer(tid,tname,temail,tphone,tgender,tcid)VALUES('$tid','$name','$email','$phone','$gender','$tcid')");

    if($ins){
       echo "inserted";
       
    }
    else{
        echo "inserted";
    }


    
}

?>