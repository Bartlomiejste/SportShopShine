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
                <div class="d-flex justify-content-between mt-2">
                    <strong>{{ __('Total') }}:</strong>
                    <span id="cartTotalValue">0.00 PLN</span>
                </div>
                <button class="btn btn-light mt-4 text-center w-100">{{ __('menu.menu.show cart') }}</button>
            </div>
        </div>

        @if (auth()->check())
            <!-- Przycisk użytkownika -->

            <div class="dropdown d-flex">
                <button class="btn dropdown-toggle ms-2" type="button" id="languageDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="p-2 fs-6"> {{ Auth::user()->name }}</span>
                </button>

                <div class="dropdown-menu dropdown-menu-start p-2 text-center" aria-labelledby="navbarDropdown">
                    <a href="{{ route('users.index') }}" class="btn btn-light d-flex align-items-center m-2">
                        <i class="bi bi-person-circle me-2"></i>
                        {{ __('Account') }}
                    </a>

                    <button class="btn btn-light d-flex align-items-center m-2"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-door-closed-fill me-2"></i>
                        {{ __('Logout') }}
                    </button>


                </div>
            </div>
        @endif

    </div>
</div>
