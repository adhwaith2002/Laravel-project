<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/adminlogin">Admin login</a>
        </li>
        
       </ul>
    </div>
  </div>
</nav>
    <br>  
    <br>  
    <center>
        <h1 align="center">Register</h1>
    <form action="/form" method="post">
        @csrf 
        
        <div class="mb-3 row">
    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-8" >
      <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
  </div>
  <label> 
   @error('name')
     {{$message}}
   @enderror
</label>
        <br>
         
        <div class="col-sm-8" > 
        <select name="course" class="form-control">  
            <option value="Course">Course</option>  
            <option value="BCA">BCA</option>  
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="M.Tech">M.Tech</option>  
        </select>  
        </div>
        <br>  
        <label for="inputgender" class="col-sm-2 col-form-label">Gender</label>
        <br>  
        <input class="form-check-input" type="radio"  id="male" value="male" name="gender">
        <label class="form-check-label" for="flexRadioDefault1">
         Male
        </label>
        <br> 
        <input class="form-check-input" type="radio"  id="female" value="female" name="gender">
        <label class="form-check-label" for="flexRadioDefault1">
         Female
        </label> 
        <br>  
        <input class="form-check-input" type="radio"  id="other" value="other" name="gender">
        <label class="form-check-label" for="flexRadioDefault1">
         Other
        </label> 
        <br>

        <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8" >
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
        <label> 
            @error('email')
                {{$message}}
            @enderror
        </label> <br> 
        <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8" >
      <input type="password" class="form-control"  id="password" name="password"  >
    </div>
  </div>

        <input type="submit" value="Submit" class="btn btn-info"/> 
    </form>  
    </center>
    
</body>
</html>
