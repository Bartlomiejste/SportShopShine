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
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/css/background.css'])

    <!-- jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>


<body>

    <div class="main-container">

        <div class="container mx-auto center">
            <div class="row justify-content-between" style="padding:20px;">

                <div class="col-auto">
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

                <div class="col-auto">
                    <i class="bi bi-twitter-x me-3 icon"></i>
                    <i class="bi bi-facebook me-3 icon"></i>
                    <i class="bi bi-linkedin me-3 icon"></i>
                    <i class="bi bi-instagram icon"></i>
                </div>

                <div class="dropdown text-end mt-2">
                    <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="p-2">{{ __('menu.menu.language') }}: </span>
                        <img src="{{ asset('./assets/' . Session::get('lang', 'pl') . '.png') }}"
                            alt="{{ Session::get('lang', 'pl') }}" title="{{ Session::get('lang', 'pl') }}">
                    </button>

                    <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdown">
                        <a href="{{ route('language.switch', 'en') }}"
                            class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                            <span class="mx-auto">English</span>
                            <img src="{{ asset('./assets/eng.png') }}" alt="English" title="English">
                        </a>
                        <a href="{{ route('language.switch', 'de') }}"
                            class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                            <span class="mx-auto">Germany</span>
                            <img src="{{ asset('./assets/ger.png') }}" alt="Germany" title="Germany">
                        </a>
                        <a href="{{ route('language.switch', 'pl') }}"
                            class="d-block text-decoration-none d-flex justify-content-between align-items-center">
                            <span class="mx-auto">Polski</span>
                            <img src="{{ asset('./assets/pl.png') }}" alt="Poland" title="Poland">
                        </a>
                    </div>
                    <p>{{ __('menu.menu.text') }}</p>
                </div>
            </div>
        </div>


    </div>

    <script type="text/javascript">
        @yield('javascript')
    </script>
    @yield('js-files')
</body>

</html>
