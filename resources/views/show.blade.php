<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
@include('flash::message')
  <table class="table  table-borderd table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      
</tr>
        
    </thead>
    @foreach($table_students as $index =>$data)
    <tbody>
      <tr>
      <td>{{$index+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td>
          <a href="{{route('edit',$data->id)}}" class=" btn btn-primary sm">Edit</a>
          <a href="{{route('delete',$data->id)}}" class=" btn btn-danger sm">Delete</a>
      </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>