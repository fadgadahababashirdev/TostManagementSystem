<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="css/bootstrap.min.css">
</head>
<body>
  <div class="container d-flex justify-content-center align-content-center p-5"style="height:100vh">
      
        <form action="checklogin.php"method="post"class="border shadow rounded p-3"style="width:450px;height:440px;">
        <h1 class="text-center">Login</h1>

       
           

        
            <div>
                <label for="username"class="form-label">User name <input type="text"name="username"id="username"placeholder="username"class="form-control" style="width:420px;"></label>
            </div>
            
            <div>
                <label for="password"class="form-label">password <input type="password"name="password"id="password"placeholder="password"class="form-control"style="width:420px;></label>
            </div>

            <div>
               <label for="user type" class="form-label">Select user type:</label>
               <select name="role" id="user type"class="form-select mb-2" >
                <option  selected value="user">User</option>
                <option value="admin">Admin</option>
               </select>
               
            </div>

            <div>
                <button type="submit"name="save"class="btn-md btn-primary rounded">submit</button>
            </div>
            
        </form>

  </div>
    
</body>
</html>