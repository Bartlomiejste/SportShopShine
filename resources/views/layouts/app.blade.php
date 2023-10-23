<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.header')

<body>

    <div class="main-container">
        <div class="container mx-auto center">

            @include('partials.info&language')
            @include('partials.cart')
            @include('partials.filter')


            <div>
                @yield('content')
            </div>
        </div>
    </div>


    <script type="text/javascript">
        @yield('javascript')
    </script>

    @yield('js-files')

</body>

</html>
