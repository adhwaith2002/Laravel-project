<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <br>  
    <br>  
    <form action="/login" method="post">
        @csrf 
       <label>
         Email:
       </label>  
        <input type="email" id="email" name="email" /> <br>    
        <br>
        <br>  

        <label>
          Password:
       </label>  
        <input type="password" id="password" name="password" /> <br>    
        <br>
        <br> 

        <input type="submit" value="login"/> 
    </form>  
</body>
</html>
