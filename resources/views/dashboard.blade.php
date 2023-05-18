<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1 align="center">Welcome to Dashboard</h1>
    <table align="center" border="10%">
  <tr>
    <th>Name</th>
    <th>Course</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  <tr>
    <td>{{$form->name}}</td>
    <td>{{$form->course}}</td>
    <td>{{$form->gender}}</td>
    <td>{{$form->email}}</td>
    <td><a href="{{url('userdelete',$form->id)}}">Delete</a></td>
    <td><a href="{{url('useredit',$form->id)}}">Edit</a></td>
  </tr>

</table>
<br>
<br>
<h1 align="center"><a  href="/login">Logout</a></h1>
</body>
</html>