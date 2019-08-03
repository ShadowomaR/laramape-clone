<nav class="navbar navbar-expand-md navbar-light bg-1 px-5">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ route('home')}}">Laracarte</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item {{set_active('home')}}">
            <a class="nav-link" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item {{set_active('about')}}">
            <a class="nav-link" href="{{ route('about')}}">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="">Artisan</a>
        </li> 
        
        <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Planet
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="//laravel.com" >Laravel.com</a>
                    <a class="dropdown-item" href="laravel.io" >Laravel.io</a>
                    <a class="dropdown-item" href="" >Laracasts</a>
                    <a class="dropdown-item" href="" >Larajobs</a>
                    <a class="dropdown-item" href="" >Lara News</a>
                    <a class="dropdown-item" href="" >Larachat</a>
                </div>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
  </div> 
</nav>