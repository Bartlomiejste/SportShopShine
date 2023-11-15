<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.navigation.header')

<body>

    <div class="main-container">
        <div class="container mx-auto center">

            @include('partials.navigation.info&language')
            @include('partials.navigation.cart')
            @include('partials.navigation.filter')


            <div>
                @yield('content')
            </div>

            @include('partials.navigation.footer')
        </div>
    </div>


    <script type="text/javascript">
        @yield('javascript')
    </script>

    @yield('js-files')


</body>

</html>
