<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
<form action="{{url('edit',$update->id)}}" method="post">
        @csrf 

        <label>Name</label>         
        <input type="text" name="name" size="15" value="{{$update->name}}"/> <br>
         <br>

        <label>Course:</label>   
        <select name="course" > 
            
            
            <option value="BCA" <?php if($update->course=="BCA") print "selected";?>>BCA</option>  
            <option value="BBA" <?php if($update->course=="BBA") print "selected";?>>BBA</option>  
            <option value="B.Tech" <?php if($update->course=="B.Tech") print "selected";?>>B.Tech</option>  
            <option value="MBA" <?php if($update->course=="MBA") print "selected";?>>MBA</option>  
            <option value="MCA" <?php if($update->course=="MCA") print "selected";?>>MCA</option>  
            <option value="M.Tech" <?php if($update->course=="M.Tech") print "selected";?>>M.Tech</option>  
        </select>  

        <br>  
       
        <br>  
        <label>Gender:</label><br>  
        <input type="radio" value="male" name="gender" <?php if($update->gender=="male") print "checked"; ?>/> Male <br>  
        <input type="radio" value="female" name="gender" <?php if($update->gender=="female") print "checked"; ?>/> Female <br>  
        <input type="radio" value="other" name="gender" <?php if($update->gender=="other") print "checked"; ?>/> Other  
        <br>  
        <br>  

        Email:  
        <input type="email" id="email" name="email" value=" {{$update->email}}"/> <br>    
        <br>
         <br>  

        <input type="submit" value="update"/> 
    </form>  
</body>
</html>