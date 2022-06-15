<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<body>
  {{-- top navigation bar --}}
  <nav class="navbar navbar-expand-md navbar-light bg-transparent border-bottom fixed-top">
    <div class="container text-center">
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        
            <ul class="navbar-nav col-md-1">
            
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-5">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown" href="#kategori">Category</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#about">Contact</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <!-- Authentication Links -->
            </ul>
            <ul class="navbar-nav col-md-1">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('img/profile.png') }}" width="30" height="30" alt=""> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="{{ route('profil') }}" class="dropdown-item">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
  </nav>

  <div class="jumbotron -mt-100" style="background-image: url(img/landpage2.png); height:690px; ">
    
  </div>

  
</body>
</html>