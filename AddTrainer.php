<?php 
include_once("testingDashboard.php");

?>
<?php
include_once("connectpage.php");
$sel="SELECT *FROM users";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);
?>


<div class="container-fluid">
  
    
    <div class="col-sm-10">
     



      <div class="row one">

      <form action="#">

      
        <h1>Add Trainer</h1>
         

        <div>
            <div><label for="tid"></label></div>
            <div><input type="hidden"name="tid"placeholder=""class=" form-control"required></div>
        </div>


        <div>
            <div><label for="email">Email</label></div>
            <div><input type="email"name="temail"placeholder="Trainer email"class="form-control pr-5"required></div>
        </div>


        <div>
            <div><label for="tusername">Trainer name</label></div>
            <div><input type="text"name="tusername"placeholder="Username"class="form-control"required></div>
        </div>


        <div>
            <div><label for="tpassword">Tpassword</label></div>
            <div><input type="password"name="tpassword"placeholder="Tpassword"class="form-control"required></div>
        </div>

        <div>
            <div><label for="course">Course</label></div>
            <div><input type="text"name="course"placeholder="Password"class="form-control"required></div>
        </div>

        <div>
           
            <div><input type="submit"name="Add"class="form-control btn-sm btn-primary mt-3 "></div>
        </div>





      </form>


      
      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>
