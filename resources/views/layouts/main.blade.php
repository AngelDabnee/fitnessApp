<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title','ADGym')</title>
</head>
<body>
    <div class="slider" id = "navBar">
        <nav id="navBlanca" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <i class="fa-solid fa-dumbbell"><a class = "text-white" href="">ADEntrenamiento</a></i>
                <button class="navbar-toggler" type="button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id = "navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class= "nav-link active text-white" href="#">Entrenamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class = "nav-link active text-white" href="#">Ejercicios</a>
                        </li>
                        <li class="nav-item">
                            <a class = "nav-link active text-white" href="#">Suplementos</a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </div>
    <main class="">
        @yield('content')
    </main>
    @yield('body')





    <div id = "footer" class="container-fluid p-4">
        <div class="row">
            <div class="col-4">
                <i class="fa-solid fa-dumbbell"><a class = "text-white" href="">ADEntrenamiento</a></i>
            </div>
            <div class="col-4">
                <p id = "copyRigth" class="text-center">ADEntrenamiento Tu aplicación de entrenamientos</p>
                <p id = "copyRigth" class="text-center">Prohibida toda copia sin autorización</p>
            </div>
            <div class="col-4 text-center ml-5">
                <i class="fab fa-facebook rounded-5 facebook-item p-2"></i>
                <i class="fab fa-twitter rounded-5 twitter-item p-2"></i>
                <i class="fab fa-google rounded-5 google-item p-2"></i>
                <i class="fab fa-linkedin rounded-5 linkedin-item p-2"></i>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
