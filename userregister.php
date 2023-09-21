

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="css/bootstrap.min.css">
    <link rel="stylesheet" href="pagecss/landingpage.css">

</head>
<body>
    <!--nav bar-->
            <nav class="navbar navbar-expand-sm bg-danger  p-2 fixed-top">
                    <div class="nav-header text-white px-4">Tost Training Academy</div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link text-lg text-dark active">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">Contact</a></li>
                        <li class="nav-item"><a href="Course.php" class="nav-link text-lg text-dark">Course</a></li>
                    </ul>


            </nav>

  
       <div class="row">
            <!--conta class-->
            <div class="col-sm-6 conta p-5">
                     <span class="one">Tost Management Academy</span>
                     <br>
                    <span class="two"> We are Delighted to welcome you here on our 
                    website.Looking for more details on us try our.</span> <span class="three">About us & Contact</span> <span class="four">us links
                    for more awareness!</span>
                    <div><button class=" btn btn-primary text-white px-5 shadow mt-4"> Visit us on our facebook handle</button></div>
            </div>

            

             <!--login form-->

                <div class="col-sm-6 pt-5">

                    <div class="formdiv">

                            <form action="#"method="POST"class=" shadow border rounded bg-white mt-5 mb-4 text-center" enctype="multipart/form-data">
                                <div class="d-flex justify-content-around">
                             
                                    <div>  <h4 class="mt-3 text-start ">ADD ACCOUNT</h4></div>
                                    <div class="mt-3"><a href="index.php ">LOGIN</a></div>
                                </div>
                                <hr>


                            <div>
                                <div><label for="userid"></label></div>
                                <div><input type="hidden" name="userid" id="userid" class="form-control"></div>
                            </div>

                            <div class="p-2">
                                <div class="text-start"><label for="username">Username</label></div>
                                <div><input type="text" name="username" id="username" class="form-control"required placeholder="Username"></div>
                            </div>

                            <div class="p-2">
                                <div class="text-start"><label for="email">Email</label></div>
                                <div><input type="email" name="email" id="email" class="form-control"required placeholder="Email"></div>

                            </div>

                           
                            <div class="p-2">
                                <div class="text-start"><label for="userimage">Userimage</label></div>
                                <div><input type="file" name="userimage" id="userimage" class="form-control"required placeholder="UserImage"></div>
                            </div>

                            <div class="p-2">
                                <div class="text-start"><label for="userimage">Courseid</label></div>
                                
                                <div><input type="text" name="courseid" id="userimage" class="form-control"required placeholder="Please check course page to enter a valid course id"></div>
                            </div>

                            <div class="p-2">
                                <div class="text-start"><label for="password">Password</label></div>
                                <div><input type="password" name="password" id="password" class="form-control"required placeholder="Password"></div>
                            </div>

                            <div>
                                <div class="text-start"><label for="role"></label></div>
                                <div><input type="hidden" name="role" id="role" class="form-control"required></div>
                            </div>

                            <button class="btn btn-primary rounded pb-2 mt-0 mb-2 form-control"style="width:160px;" name="Add">Create</button>
                             
                            </form>

                    </div>
                  
              </div>

        </div>

       
    

   


    
</body>
</html>

<?php
include_once("connectpage.php");
if(isset($_POST['Add'])){
    $userid=$_POST['userid'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    

    //add user image
    $filename=$_FILES["userimage"]["name"];
    $tempname=$_FILES["userimage"]["tmp_name"];

    $folder="./UserImages/".$filename;

    $courseid=$_POST['courseid'];
    $password=$_POST['password'];

    $insert=mysqli_query($con,"INSERT INTO users (userid,username,email,userimage,courseid,password) VALUES('$userid','$username','$email','$filename','$courseid','$password')");

    if($insert && move_uploaded_file($tempname,$folder)){
        echo "<script>alert('You have successfully registered with us')</script>";
        echo "<script>window.location.assign('index.php')</script>";
    }
    else{
        echo "<script>alert('oops the register failed try again')</script>";
    }

}

?>

