
    <!--nav bar-->
         <?php
         include_once("navbar.php");
         
         ?>

  
       <div class="row">
            <!--conta class-->
            <div class="col-sm-6 conta p-5 mt-5">
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