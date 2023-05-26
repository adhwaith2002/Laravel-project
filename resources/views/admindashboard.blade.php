<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<nav class="nav justify-content-end">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/adminlogin">Logout</a>
  </li>
  
  
</ul>
</nav>
<center>
      <div class="container">
    <form action="/admindashboard" method="post" enctype="multipart/form-data">
        @csrf 
      <br><br> 
      <h1>Admin Dashboard</h1><br>
        <div class="mb-3 row">
    <label for="inputproduct" class="col-sm-2 col-form-label">Product</label>
    <div class="col-sm-8" >
      <input type="text" class="form-control" id="product" name="product">
    </div>
  </div>
          
        <br>
        <br>  
        
        <div class="mb-3 row">
    <label for="inputfeature" class="col-sm-2 col-form-label">Feature</label>
    <div class="col-sm-8" >
      <input type="text" class="form-control"  id="feature" name="feature"  >
    </div>
  </div>
     
        <br> 
        <label for="inputpic" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-8" >
      <input type="file" name="image" class="form-control">
    </div>
    <br>
  </div>

        <input type="submit" value="add" class="btn btn-outline-info"/> 
    </form> 
      </div> 
    </center>
</body>
</html>