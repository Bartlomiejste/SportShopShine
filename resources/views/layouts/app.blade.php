<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./assets/soccer-ball.png">

    <title>{{ config('app.name', 'SportShopShine.pl - piłkarski sklep internetowy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,400&display=swap"
        rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/css/background.css', 'resources/css/menu.css'])

    <!-- jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>


<body>

    <div class="main-container">

        <div class="container mx-auto center">
            <div class="row justify-content-between p-4">

                <div class="col-auto d-flex">
                    <div class="row">
                        <div class="col d-flex align-items-center icon">
                            <i class="bi bi-envelope me-2"></i>
                            <span>example.email@example.com</span>
                        </div>
                        <div class="col d-flex align-items-center icon">
                            <i class="bi bi-telephone me-2"></i>
                            <span>+48 123 456 789</span>
                        </div>
                    </div>
                </div>

                <div class="col-auto d-flex align-items-center">
                    <i class="bi bi-twitter-x me-3 icon"></i>
                    <i class="bi bi-facebook me-3 icon"></i>
                    <i class="bi bi-linkedin me-3 icon"></i>
                    <i class="bi bi-instagram icon"></i>


                    <div class="dropdown d-flex">
                        <button class="btn dropdown-toggle" type="button" id="languageDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="p-2 fs-6">{{ __('menu.menu.language') }}: </span>
                            <img src="{{ asset('./assets/' . Session::get('lang', 'pl') . '.png') }}"
                                alt="{{ Session::get('lang', 'pl') }}" title="{{ Session::get('lang', 'pl') }}">
                        </button>

                        <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdown">
                            <a href="{{ route('language.switch', 'en') }}"
                                class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                                <span class="mx-auto">English</span>
                                <img src="{{ asset('./assets/en.png') }}" alt="English" title="English">
                            </a>
                            <a href="{{ route('language.switch', 'de') }}"
                                class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                                <span class="mx-auto">Deutsch</span>
                                <img src="{{ asset('./assets/de.png') }}" alt="Deutsch" title="Deutsch">
                            </a>
                            <a href="{{ route('language.switch', 'pl') }}"
                                class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                                <span class="mx-auto">Polski</span>
                                <img src="{{ asset('./assets/pl.png') }}" alt="Poland" title="Poland">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ... (Reszta elementów w containerze) ... -->

                <div class="d-flex align-items-center justify-content-end p-3">
                    <!-- Przycisk logowania -->
                    <a href="{{ route('login') }}" class="btn btn-light me-2">{{ __('Login') }}</a>

                    <!-- Przycisk rejestracji -->
                    <a href="{{ route('register') }}" class="btn btn-light me-2">{{ __('Register') }}</a>

                    <!-- Koszyk zakupowy -->
                    <div class="dropdown d-flex">
                        <button class="btn btn-light dropdown-toggle" type="button" id="cartDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cart3"></i> {{ __('Cart') }} (<span id="cartItemsCount">0</span>)
                        </button>
                        <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="cartDropdown">
                            <!-- Lista produktów w koszyku -->
                            <!-- Na razie zostawię to puste, ale można dodać tutaj elementy koszyka -->

                            <!-- Suma wartości produktów w koszyku -->
                            <div class="d-flex justify-content-between">
                                <strong>{{ __('Total') }}:</strong>
                                <span id="cartTotalValue">0.00 PLN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary vw-100 position-absolute start-0">
                <div class="container-fluid w-50">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand d-none d-xl-block" href="{{ url('/') }}">
                        <img src="{{ asset('./assets/logo1.png') }}"
                            style="width:250px; position:absolute; top:-90px; left:270px" alt="Poland" title="Poland">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('menu.menu.shoes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('menu.menu.clothes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('menu.menu.accessories') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('menu.menu.balls') }}</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2 w-100" type="search"
                                placeholder="{{ __('menu.menu.search') }} ... "aria-label="Search">
                            <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
            </nav>
            <div
                style="display:flex; align-items:center; justify-content:center; width:100%; opacity:0.3; margin-top:55px;">
                <img src="{{ asset('./assets/messibg.png') }}" style="width:100%" alt="Messi" title="Messi">
            </div>
        </div>
    </div>





    <script type="text/javascript">
        @yield('javascript')
    </script>
    @yield('js-files')
</body>

</html>
