
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<!DOCTYPE html>
<html>
<style>

</style>
<body>

<h2>User table</h2>

<table  border="10%">
  <tr>
    <th>Name</th>
    <th>Course</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  @foreach($forms as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->course}}</td>
    <td>{{$item->gender}}</td>
    <td>{{$item->email}}</td>
    <td><a href="{{url('delete',$item->id)}}">Delete</a></td>
    <td><a href="{{url('update_view',$item->id)}}">Edit</a></td>
  </tr>
 @endforeach
</table>


</body>
</html>


</body>
</html>
