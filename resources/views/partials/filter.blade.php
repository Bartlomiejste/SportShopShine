<nav class="navbar navbar-expand-lg navbar-dark bg-primary vw-100 position-absolute start-0">
    <div class="container-fluid w-50">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-none d-xl-block" href="{{ url('/') }}">
            <img src="{{ asset('./assets/logo1.png') }}"
                style="width:250px; position:absolute; top:-90px; z-index:1; left:270px" alt="logo" title="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">{{ __('menu.menu.shoes') }}</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">{{ __('menu.menu.clothes') }}</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">{{ __('menu.menu.accessories') }}</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" href="#">{{ __('menu.menu.balls') }}</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 w-100" type="search"
                    placeholder="{{ __('menu.menu.search') }} ... "aria-label="Search">
                <button class="btn btn-light" type="submit" onclick="event.preventDefault()"><i
                        class="bi
                    bi-search"></i></button>
            </form>
        </div>
</nav>
