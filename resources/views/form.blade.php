<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <br>  
    <br>  
    <form action="/form" method="post">
        @csrf 

        <label>Name</label>         
        <input type="text" name="name" size="15"/> <br>
        <label> 
            @error('name')
                {{$message}}
            @enderror
        </label><br> 
        
       

        <label>Course:</label>   
        <select name="course">  
            <option value="Course">Course</option>  
            <option value="BCA">BCA</option>  
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="M.Tech">M.Tech</option>  
        </select>  

        <br>  
       
        <br>  
        <label>Gender:</label><br>  
        <input type="radio" value="male" name="gender"/> Male <br>  
        <input type="radio" value="female" name="gender"/> Female <br>  
        <input type="radio" value="other" name="gender"/> Other  
        <br>  
        <br>  

        Email:  
        <input type="email" id="email" name="email"/> <br>    
        <br>
        <label> 
            @error('email')
                {{$message}}
            @enderror
        </label> <br> 
        <label>Password</label>         
        <input type="password" name="password" /> <br>
        <br> 

        <input type="submit" value="Submit"/> 
    </form>  
</body>
</html>
