
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    @livewireStyles
</head>
<body>
    <div class="py-5">
        <div class="container">
        @include('flash::message')
        <div class="row justify-content-center">
            <div class="card-header">
                <h4>Edit Form</h4>
            </div>
            <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('update',$idsss) }}" method="POST" >
                    @csrf
                    @method('put')

                    <div class="form-group">

                    <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="name" value="{{ $table_students->name }}" required>
                    </div>
                
                    <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $table_students->email }}" required>
                    </div>
                    
                    <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="{{ $table_students->password }}" required>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                <button type="submit" class="btn btn-success">Update</button>
            </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>