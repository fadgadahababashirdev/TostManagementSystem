<?php
include_once("testingDashboard.php");

?>
    <?php
    include_once("connectpage.php");

    
   
    $sel="SELECT * FROM users";
    $runsel=mysqli_query($con,$sel);
    $fetch=mysqli_fetch_array($runsel);

    
    ?>





    
    <div class="col-sm-9">
   



      <div class="row one">

      <table class="table">
        <thead>
            <tr>
                <th>Userid</th>
                <th>Username</th>
                <th>Email</th>
                <th>Userimage</th>
                <th>Courseid</th>
                <th>Password</th>
                <th>Role</th>
                <th>Status</th>
                <th colspan="2">operations</th>
            </tr>
        </thead>

        <?php
        while($row=mysqli_fetch_array($runsel)){
            $userid=$row['userid'];
            $username=$row['username'];
            $email=$row['email'];
            $userimage=$row['userimage'];
            $courseid=$row['courseid'];
            $password=$row['password'];
            $role=$row['role'];
            $status=$row['status'];
         
        
        
        ?>

        <tbody>
            <tr>
                <td><?php echo $userid;?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $userimage;?></td>
                <td><?php echo $courseid;?></td>
                <td><?php echo $password;?></td>
                <td><?php echo $role;?></td>

                <td><?php echo $status;?></td>
                
                <td><a href="editform.php? userid=<?php echo $row['userid'];?> & username=<?php echo $row['username'];?>& email=<?php echo $row['email'];?>& userimage=<?php echo  $row['userimage'];?> & courseid=<?php echo $row['courseid'];?> & password=<?php echo $row['password'];?>& role=<?php echo $row['role'];?> & status=<?php echo $row['status'];?>"class="btn rounded text-center btn-primary">Edit</a></td>
                <td><a href="delete.php ?" delete= <?php echo $row['userid'];?> class="btn rounded text-center btn-danger">Delete</a></td>
               
               
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
