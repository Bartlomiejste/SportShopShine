@extends('layouts.app')


@section('content')
    @include('partials.main.carousel')
    @include('products.index')
@endsection


@section('js-files')
    <script src="{{ asset('../js/menu.js') }}"></script>
@endsection
