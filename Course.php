
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
            <nav class="navbar navbar-expand-sm bg-danger  p-2 fixed-top">
                    <div class="nav-header text-white px-4">Tost Training Academy</div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="landingpage.php" class="nav-link text-lg text-dark active">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">Contact</a></li>
                       
                    </ul>


            </nav>


               
        <div class="row container-fluid p-5"style="margin-top:23px;">
        <?php
                 while($row=mysqli_fetch_array($runselect)){

                 
                 ?>

           <div class="col-sm-4 border shadow rounded text-center pt-3 pb-3"style="width:320px;margin-left:63px;">
                    <div class="d-flex justify-content-around"><p style="color: rgb(244, 12, 116);"><?php echo $row['cname'];?></p><p>course id:<?php echo $row['cid'];?></p></div>
                    <div><img src="CourseImage/<?php echo $row['courseimage'];?>" alt="image not found"></div>
                    <div ><p><?php echo $row['cdescription']?></p></div>
                    <div class="text-start" style="margin-left:42px;"><a href="readfile.php ? pdffile=<?php echo $row['cid'];?>">file</a></div>
           </div>
           <?php
                 }
           ?>
           
        </div>
    
       
    

   


    
</body>
</html>