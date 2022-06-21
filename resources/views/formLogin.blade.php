<!doctype html>
<html lang="en">
    <head>
    <title>72200417_UKDW</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
</head>
 <body class="text-center">
 <main class="form-signin w-100 m-auto">
    <form action="/user/cekLogin" method="POST">
    @if (session('alert-logout'))
        <div class="alert alert-warning alert-disissable fade show" role="alert">
            <strong>{{ session('alert-logout') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="bi bi-check2-square"></i></span>
            </button>
        </div>
    @endif
    @csrf
    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal"> Form Login  </h1>
    <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" required autofocus>
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingInput" required>
        <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"> Sign In </button>
    <p class="mt-5 mb-5 text-muted">&copy; 2022</p>
</form>
</main>  
</body>
</html>
    
    
    
