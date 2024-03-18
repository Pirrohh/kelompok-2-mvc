<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Buku | @yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>


<body>

    <div class="main d-flex flex-column justifiy-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-info ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Peminjaman Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </div>
          </nav>

          
          <div class="body-content h-100">
            <div class="row g-0 h-100 ">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
        
                        @if (Auth::user()->role_id == 1)    
                        <a href="dashboard" @if (request()->route()->uri == 'dashboard') class="active"@endif >Dashboard</a>
                        <a href="books"  @if (request()->route()->uri == 'books') class="active"@endif>Books</a>
                        <a href="category" @if (request()->route()->uri == 'category') class="active"@endif>Category</a>
                        <a href="user" @if (request()->route()->uri == 'user') class="active"@endif>Users</a>
                        <a href="rentlog" @if (request()->route()->uri == 'rentlog') class="active"@endif>Rent Log</a>
                        <a href="logout" @if (request()->route()->uri == 'logout') class="active"@endif>Logout</a>
                            
                        @else
                        <a href="profile" @if (request()->route()->uri == 'profile') class="active"@endif>Profile</a>
                        <a href="logout" @if (request()->route()->uri == 'logout') class="active"@endif>Logout</a>
                        @endif

                </div>
                
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
          </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>