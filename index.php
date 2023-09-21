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
    <!--nav bar-->
            <nav class="navbar navbar-expand-sm bg-danger  p-2 fixed-top">
                    <div class="nav-header text-white px-4">Tost Training Academy</div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link text-lg text-dark active">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-lg text-dark">Contact</a></li>
                        <li class="nav-item"><a href="Course.php" class="nav-link text-lg text-dark">Course</a></li>
                    </ul>


            </nav>

  
       <div class="row">
            <!--conta class-->
            <div class="col-sm-6 conta p-5">
                     <span class="one">Tost Management Academy</span>
                     <br>
                    <span class="two"> We are Delighted to welcome you here on our 
                    website.Looking for more details on us try our.</span> <span class="three">About us & Contact</span> <span class="four">us links
                    for more awareness!</span>
                    <div><button class=" btn btn-primary text-white px-5 shadow mt-4"> Visit us on our facebook handle</button></div>
            </div>

            

             <!--login form-->

                <div class="col-sm-6 pt-5">
                    <form action="login.php"method="POST"class=" shadow border-primary rounded bg-white mt-5">
                        <h1 class="text-center text-dark">Login</h1>
                        <div class="inputs pb-3">
                          <div class="mx-3"> <label for="email" class="pb-2">Email</label> <input type="Email"name="email"placeholder="Enter your email" class="form-control " required style="width:330px;"></div>
                          <div class="mx-3"> <label for="password" class="pb-2">Password</label> <input type="password"name="password"placeholder="Enter your password" class="form-control " required style="width:330px;"></div>
                          <div class="mx-3 text-center">  <input type="submit"name="login"value="Login" class="btn-xl btn-primary text-center rounded mt-3 text-white p-2" style="width:230px;"></div>
                          <div class="  text-primary mx-5"><hr></div>
                          <div  class="mx-3 text-center text-danger dwl">Dont have Account? <span class="text-success"> <a href="userregister.php" class="m-1">click here to register</a></div>
                         
                         
                        </div>
                    </form>
              </div>

        </div>

       
    

   


    
</body>
</html>