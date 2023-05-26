<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/login">User Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/form">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin login</a>
        </li>
        
       </ul>
    </div>
  </div>
</nav>
    <br>  
    <br>  
    <h1 align="center">ADMIN LOGIN</h1>
    <br>  
    <br>  
    <center>
      <div class="container">
    <form action="/adminlogin" method="post">
        @csrf 

        <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8" >
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
          
        <br>
        <br>  
        
        <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8" >
      <input type="password" class="form-control"  id="password" name="password"  >
    </div>
  </div>
        
   
        <br>
        <br> 

        <input type="submit" value="login" class="btn btn-info"/> 
    </form> 
      </div> 
    </center>
    
</body>
</html>
