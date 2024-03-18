<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Buku | Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }
    .login-box{
        width: 500px;
        border: solid 1px;
        padding: 20px;
    }

    form div{
        margin-bottom: 15px;
    }
</style>
<body>


<div class="main d-flex justify-content-center align-items-center">
<div class="login-box">
<form action="" method="post">
    @csrf
    <div class="">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
    </div>
    <div class="">
        <label for="password" class="form-label">Password</label>
        <input type="text" name="password" id="password" class="form-control">
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary form-control">Login</button>
        
    </div>
    <div class="text-center">
        <a href="#" >Sign In</a>
    </div>
</form>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>