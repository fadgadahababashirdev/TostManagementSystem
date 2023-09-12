
<?php
    $con=mysqli_connect("localhost","root","","mypro");

    ?>
<?php
$sel="SELECT *from admin";
$runsel=mysqli_query($con,$sel);
$fetch=mysqli_fetch_assoc($runsel);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    a{
        text-decoration:none;
    }

    .hallo{
      display:flex;
      justify-content:space-between;
    }
        
    
  </style>
</head>
<body>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
    <h2><a href="dashboard.php">Tost training academy</a></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Admin activities</a></li>
        <li><a href="registerstudentbyadmin.php">Add Student</a></li>
        <li><a href="registercoursebyadmin.php">Add Course</a></li>
        <li><a href="registertrainerbyadmin.php">Add Trainer</a></li>
        <li><a href="select.php">operations</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
    <div class=" hallo bg-primary">
        <div><h1 style="font-size:22px;color:black;margin-top:0;padding-top:0; margin-left:23px;"><?php echo $fetch['name'];?></h1></div>
        <div><a href="logout.php" style="margin-right:23px;color:red;">Logout</a></div>
       
      </div>
      <div class="col-sm-5  shadow border rounded "style="margin-left:30px;margin-top:0px;">
                        
      <form action="#"method="POST"style="margin-left:12px;margin-top:2px;"enctype="multipart/form-data">
                                        <legend class="text-primary">Add course</legend>
                                        <input type="hidden"name="cid">
                        
                            
                                <div>
                                    <div><label for="name" class="text-primary"> Course Name</label></div>
                                    <div><input type="text"name="cname"placeholder="Course name" class="form-control"required></div>
                                </div>

                                <div>
                                    <div><label for="name" class="text-primary">Course description</label></div>
                                    <div><textarea name="coursedescription"placeholder="Course description" class="form-control"required></textarea></div>
                                </div>


                                <div>
                                    <div><label for="name" class="text-primary">Add course image</label></div>
                                    <div class="form-group"><input type="file" name="coursefile"placeholder="Add a file" class="form-control"required></div>
                                </div>

                                <div>
                                    <div><label for="name" class="text-primary">Add course pdf file</label></div>
                                    <div class="form-group"><input type="file" name="coursepdffile"placeholder="Add a PDF file" class="form-control"required></div>
                                </div>

                                


                                <div>
                                    
                                <input class="btn- btn-success form-control text-center text-white ki my-3" type="submit"name="save"value="submit"style="margin-top:12px;">
                                </div>

                            
                  </form>
  

                            </div>
                     
                 </div>
    </div>
    
</body>
</html>

<?php
if(isset($_POST['save'])){
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $description=$_POST['coursedescription'];


    //image file to database 

    $filename=$_FILES["coursefile"]["name"];
    $tempname=$_FILES["coursefile"]["tmp_name"];

    $folder="./images/".$filename;

    //coursefile image upload

    $file=$_FILES["coursepdffile"]["name"];
    $tem=$_FILES["coursepdffile"]["tmp_name"];

    $folderfile="./file/".$file;

    //inserting into db
    $ins=mysqli_query($con,"INSERT INTO course(cid,cname,coursedescription,coursefile,coursepdffile) VALUES('$cid','$cname','$description','$filename','$file')");

    
   
   //checking if file has been inserted or not
    if($ins && move_uploaded_file($tempname,$folder) && move_uploaded_file($tem,$folderfile)){
        echo "<script>alert('registered successfuly')</script>";
    }
    else{
        echo "register denied";
    }

  }

?>  
      
    
    </div>
  </div>
</div>

</body>
</html>
