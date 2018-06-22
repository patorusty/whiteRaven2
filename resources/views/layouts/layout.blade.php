<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./CSS/styles.css')}}">
    <title>White Raven - @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark main-nav d-flex">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{asset("images/logo.png")}}" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse burger" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">productos</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('products.index')}}">Todos</a>
                                    @foreach($subcategories as $subcategory)
                                    <a class="dropdown-item" href="/subcategories/{{$subcategory->id}}">{{$subcategory->name}}</a>
                                    @endforeach
                                    <a class="dropdown-item" href="/brands">Marcas</a>
                                    </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('somos') }}">quienes somos</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('faq') }}">faq</a>
                            </li>
                            <li class="nav-item active">
                            <a class="nav-link" href="{{ route('contacto')}}">contacto</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0 boton-search" type="submit">Search</button>
                        </form>
                            @if (auth()->check() && auth()->user()->is_admin)
                            <div class="d-flex align-items-center">
                                    <a href="{{ route('admin.index') }}" class="d-flex align-items-center login">
                                        <p>Admin</p>
                            </div>  @else  <div> </div> @endif
                        <div class="d-flex align-items-center">
                            @guest
                                <a href="{{ route('login') }}" class="d-flex align-items-center login">
                                    <i class="far fa-user fa-lg user"></i>
                                    <p>Login</p>
                            @else
                            <a href="{{ route('profile') }}" class="d-flex align-items-center login user">{{ Auth::user()->name }}
                            @endguest
                                    <a href="{{ route('cart.index') }}">
                                        <i class="fas fa-shopping-cart user"></i>(1)
                                    </a>
                            </a>
                        </div>


                </div>
        </nav>
        <div class="container">
@yield('content')
</div>
        <footer class="footer py-2 fixed-bottom">
                <a href="" class="socialmedia">
                    <i class="fab fa-facebook-square fa-2x socialmedia"></i>
                </a>
                <a href="" class="socialmedia">
                    <i class="fab fa-instagram fa-2x socialmedia"></i>
                </a>
                <p class="texto-footer">Copyright® Sarbros Desing</p>
        </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
</body>

</html>