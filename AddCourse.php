<?php
include_once("testingDashboard.php");

?>

<?php
include_once("connectpage.php");
$sel="SELECT *FROM users";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);
?>


     <div class="row one">

      <form action="#"method="POST"enctype="multipart/form-data">

      
        <h1>Add Course</h1>
         

        <div>
            <div><label for="sid"></label></div>
            <div><input type="hidden"name="cid"placeholder=""class=" form-control"required></div>
        </div>


        <div>
            <div><label for="Coursename">Coursename</label></div>
            <div><input type="text"name="cname"placeholder="Coursename"class="form-control pr-5"required></div>
        </div>


        <div>
            <div><label for="courseimage">Courseimage</label></div>
            <div><input type="file"name="courseimage"class="form-control"required></div>
        </div>


        <div>
            <div><label for="description">Description</label></div>
            <div><input type="text"name="cdescription"placeholder="Description"class="form-control"required></div>
        </div>

        <div>
            <div><label for="Coursefile">CourseFile</label></div>
            <div><input type="file"name="cfile"placeholder="Password"class="form-control mt-3 "required></div>
        </div>

        <div>
           
            <div><input type="submit"name="Add"class="form-control btn-sm btn-primary mt-3 " style="margin-top:32px;"></div>
        </div>





      </form>


      
      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>
<?php

 //connection 
 include_once("connectpage.php");
if(isset($_POST['Add'])){
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  
  // upload file

  $filename=$_FILES["courseimage"]["name"];
  $tempname=$_FILES["courseimage"]["tmp_name"];

  $folder="./CourseImage/".$filename;

  $cdescription=$_POST['cdescription'];

  //uploading pdf file

  $file=$_FILES["cfile"]["name"];
  $tfile=$_FILES["cfile"]["tmp_name"];

  $tfolder="./CoursePdf/".$file;

  $insert=mysqli_query($con,"INSERT INTO course(cid,cname,courseimage,cdescription,cfile) VALUES('$cid','$cname','$filename','$cdescription','$file')");

  if($insert && move_uploaded_file($tempname,$folder) && move_uploaded_file($tfile,$tfolder)){
    echo "inserted";
  }
  else{
    echo "not inserted";
  }

}

?>





