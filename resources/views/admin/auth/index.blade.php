<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app-assets/css/admin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>{{config('app.name')}}</title>
</head>
<body style="background-image:url({{asset('app-assets/admin/background.jpg')}});background-size: cover;background-position: center;">
    <div class="container my-5">
        <div class="bg-light border rounded">
            <h1 class="text-center"> Admin Login </h1>
            <form action="{{route('adminSignin')}}" method="POST" class="p-4">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" name="user" class="form-control" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                </div>
                <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
              </form>
        </div>
    </div>
</body>
</html>