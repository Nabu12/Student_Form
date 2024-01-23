<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="py-5">
<div class="container">
@include('flash::message')
 <div class="row justify-content-center">
<div class="card-header">
 <h4>Student Login Form</h4>
<div class="card">
<div class="card-body">
<form action="{{route('create')}}" method="POST">
@csrf
     <div class="form-group">
                
    <div class="col-md-6">
 
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="name" required>
  </div>
  <div class="col-md-6">
    
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required>

  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>

  <div class="col-md-6 mt-5">
  <button type="submit" class="btn btn-primary">Submit</button>
  
  <div class="col-md-6 float-end">
  <a href="{{ route('show') }}"><button type="button" class="btn btn-danger">SHOW</button></a>  
  </div>
 
  </div>
  </div>
       </div>

           </form>
          </div>
            </div>

            </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>