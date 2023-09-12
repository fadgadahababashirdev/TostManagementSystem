
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"href="styleslandingandcourse.css">

    <style>

        body{
            overflow-x:hidden;
        }
        img{
            width:100%;
            height:250px;

        }

        .colone{
            margin-top:80px;
        }

        .lin{
            margin-left:0;
            padding:0;
            margin-top:12px;
        }
        .lin a{
            font-size:12px;
        }
         a:hover{
         
            font-size:12px;
            color:red;
            padding:12px;
           

        }

        .ven{
            background-color:lightblue;
        }

        
       
    </style>
</head>
<body>
    <div class="nav fixed-top P-5 bg-dark justify-content-between">
        <div class="nav-item"><h1>Tost Training Academy</h1></div>
        <div><a href="Adminlogin.php">Login</a>/<a href="#">signup</a></div>
       

    </div> 
              
    <?php
    //php codes to select and runselect
     require_once("connect.php");
    $select="SELECT *FROM course";
    $runselect=mysqli_query($con,$select);
    ?>

   
    <div class="container-fluid">

                    <!--first row of the container-->

                    <div class="row ven">

                    <?php
    //while loop

    while($data=mysqli_fetch_assoc($runselect)){

    
    ?>
                    <!--first column of the container-->     
                    <div class="col-sm-3 colone mb-3">
                     
                        <div><img src="./images/<?php echo $data['coursefile'];?>" alt="image not found" class="rounded-top"></div>
                        <div class="kepa bg-dark p-3">
                            <div><h1><?php echo $data['cname'];?></h1></div>
                            <div><?php echo $data['coursedescription'];?></div>
                            <div><a href="readpdffile.php"class="lin">Course Description</a></div>

                        </div>

                      

               
                
                    </div>  <?php
                        }
                        ?>
        </div>


    </div>

  
       


  
   



   
                   
              
         


    
</body>
</html>
