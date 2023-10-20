<div class="container-fluid">
    <!-- ... (Reszta elementów w containerze) ... -->

    <div class="d-flex align-items-center justify-content-end p-3">

        @if (!auth()->check())
            <!-- Przycisk logowania -->
            <a href="{{ route('login') }}" class="btn btn-light me-2">{{ __('Login') }}</a>

            <!-- Przycisk rejestracji -->
            <a href="{{ route('register') }}" class="btn btn-light me-2">{{ __('Register') }}</a>
        @endif

        <!-- Koszyk zakupowy -->
        <div class="dropdown d-flex">
            <button class="btn btn-light dropdown-toggle" type="button" id="cartDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-cart3"></i> {{ __('menu.menu.cart') }} (<span id="cartItemsCount">0</span>)
            </button>
            <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="cartDropdown">
                <!-- Lista produktów w koszyku -->
                <!-- Na razie zostawię to puste, ale można dodać tutaj elementy koszyka -->

                <!-- Suma wartości produktów w koszyku -->
                <div class="d-flex justify-content-between">
                    <strong>{{ __('Total') }}:</strong>
                    <span id="cartTotalValue">0.00 PLN</span>
                </div>
                <button class="btn btn-light m-1 p-1 text-center w-100">{{ __('menu.menu.show cart') }}</button>
            </div>
        </div>

        @if (auth()->check())
            <!-- Przycisk wylogowywania -->
            <button href="{{ route('logout') }}" class="btn btn-light m-2"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </button>
        @endif
    </div>
</div>
