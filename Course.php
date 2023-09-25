
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

    <?php

  


    //selecting codes from table course;
    include_once("connectpage.php");
    $select="SELECT *FROM course ";
    $runselect=mysqli_query($con,$select);


    ?>
    <!--nav bar-->
    
    <?php
    //navbar 
    include_once("navbar.php");
    
    ?>


               
        <div class="row container-fluid p-5"style="margin-top:23px;">
        <?php
                 while($row=mysqli_fetch_array($runselect)){

                 
                 ?>

           <div class="col-sm-4 border shadow rounded text-center pt-3 pb-3"style="width:320px;margin-left:63px;">
                    <div class="d-flex justify-content-around"><p style="color: rgb(244, 12, 116);"><?php echo $row['cname'];?></p><p>course id:<?php echo $row['cid'];?></p></div>
                    <div><img src="CourseImage/<?php echo $row['courseimage'];?>" alt="image not found"></div>
                    <div ><p><?php echo $row['cdescription']?></p></div>
                    <div class="text-start" style="margin-left:42px;"><a href="readfile.php ? pdffile=<?php echo $row['cid'];?>">Download course</a></div>
           </div>
           <?php
                 }
           ?>
           
        </div>
    
       
    

   


    
</body>
</html>