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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
   h1 a{
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
        <li><a href="select.php">Operations</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
    <div class=" hallo bg-primary">
        <div><h1 style="font-size:22px;color:black;margin-top:0;padding-top:0; margin-left:23px;"><?php echo $fetch['name'];?></h1></div>
        <div><a href="logout.php" style="margin-right:23px;color:red;">Logout</a></div>
       
      </div>
      <div>

  <?php
    $select="SELECT *FROM admin";
    $runs=mysqli_query($con,$select);
    
    ?>

    <table class="table mt-5" style="margin-top:23px;">
        
        <thead>
        
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Password</th>
            <th colspan="2">Operations</th>
        </thead>


       <?php
       while($lolo=mysqli_fetch_array($runs)){

       $id=$lolo['aid'];
       $name=$lolo['name'];
       $email=$lolo['email'];
       $role=$lolo['role'];
       $phone=$lolo['phone'];
       $gender=$lolo['gender'];
       $password=$lolo['password'];
       
       ?>

       <tbody>
        <tr>
            <td><?php echo "$id"?></td>
            <td><?php echo "$name"?></td>
            <td><?php echo "$email"?></td>
            <td><?php echo "$role"?></td>
            <td><?php echo "$phone"?></td>
            <td><?php echo "$gender"?></td>
            <td><?php echo "$password"?></td>
            <td><a href="updateone.php? i=<?php echo $lolo['aid'];?>& u=<?php echo $lolo['name'];?>& e=<?php echo $lolo['email'];?>& r=<?php echo $lolo['role'];?>& p=<?php echo $lolo['phone'];?>& g=<?php echo $lolo['gender'];?>& paa=<?php echo $lolo['password'];?>"class="btn-sm btn-success rounded text-center">edit</a></td>
            <td><a href="delete.php ? dee=<?php echo $lolo['aid'];?>" class="btn-sm btn-danger rounded">delete</a></td>
            
        </tr>
       </tbody>
       <?php
       }
       
       ?>

    </table>
  </div>


     
  </div>



  
</div>

</body>
</html>
