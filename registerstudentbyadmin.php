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
        <li><a href="registerstudentbyadmin.php">Register Student</a></li>
        <li><a href="registercoursebyadmin.php">Register Course</a></li>
        <li><a href="registertrainerbyadmin.php">Register Trainer</a></li>
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
                        
                        <form action="#"method="POST"style="margin-left:12px;margin-top:12px;">
                                <legend class="text-primary">Student Register</legend>
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
                            <div><select name="gender" id="gend" class="form-control ki"style="width:345px;">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select></div>
                        </div>

                        <div>
                            <div><label for="name"class="text-primary">Courseid</label></div>
                            <div><input type="text"name="scid"placeholder="Enter Course id" class="form-control"required class="my-3"></div>
                        </div>
                        

                        <div>
        
                            <input class="btn- btn-success form-control text-center text-white ki my-3" type="submit"name="save"value="submit" style="margin-top:12px;">
                       </div>

                    
                     </form>

                    </div>
             
         </div>
</div>

</body>
</html>


<?php 
if(isset($_POST['save'])){
$aid=$_POST['sid'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$cid=$_POST['scid'];

$ins=mysqli_query($con,"INSERT INTO student(sid,name,email,phone,gender,scid)VALUES('$aid','$name','$email','$phone','$gender','$cid')");

if($ins){
echo "inserted";

}
else{
echo "inserted";
}



}

?>
      
      
    
    </div>
  </div>
</div>

</body>
</html>
