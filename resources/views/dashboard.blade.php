<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1 align="center">Welcome to  User Dashboard</h1>
    <table border="10%">
  <tr>
    <th>Product</th>
    <th>feature</th>
    <th>Image</th>
  </tr>
  @foreach($forms as $form)
  <tr>
    <td>{{$form->product}}</td>
    <td>{{$form->features}}</td>
  </tr>
  @endforeach
</table>

<br>
<br>
<h1 align="center"><a  href="/login">Logout</a></h1>
</body>
</html>