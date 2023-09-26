
<?php
include_once("testingDashboard.php");

?>    
    
    <?php
    include_once("connectpage.php");

    
   
    $sel="SELECT * FROM users";
    $runsel=mysqli_query($con,$sel);
    $fetch=mysqli_fetch_array($runsel);

    
    ?>




<div class="container-fluid">
 
    <div class="col-sm-9">
      


      <div class="row one">

      <table class="table">
        <thead>
            <tr>
                <th>CourseId</th>
                <th>CourseName</th>
                <th>CourseImage</th>
                <th>CourseDescription</th>
                <th>CourseFile</th>
             
                <th colspan="2">operations</th>
            </tr>
        </thead>

        <?php

        $selecto = "select *from course";
        $runselecto = mysqli_query($con,$selecto);
        while($row=mysqli_fetch_array($runselecto)){
            $cid=$row['cid'];
            $cname=$row['cname'];
            $cimage=$row['courseimage'];
            $cdes=$row['cdescription'];
            $cfile=$row['cfile'];
         
         
        
        
        ?>

        <tbody>
            <tr>
                <td><?php echo $cid;?></td>
                <td><?php echo $cname;?></td>
                <td><?php echo $cimage;?></td>
                <td><?php echo $cdes;?></td>
                <td><?php echo $cfile;?></td>
               
                
                <td><a href="EditCourseForm.php? cid=<?php echo $row['cid'];?>& cname=<?php echo $row['cname'];?>& courseimage=<?php echo $row['courseimage'];?>& cdescription=<?php echo  $row['cdescription'];?> & cfile=<?php echo $row['cfile'];?> "class="btn rounded text-center btn-primary">Edit</a></td>
                <td><a href="DeleteCourse.php? delete=<?php echo $row['cid'];?>"class="btn rounded text-center btn-danger">Delete</a></td>
               
               
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
