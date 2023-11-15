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
            <button class="btn dropdown-toggle ms-2" type="button" id="languageDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
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
