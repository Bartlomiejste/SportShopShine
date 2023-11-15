@extends('layouts.app')


@section('content')
    @include('partials.main.carousel')
    <div style="width: 100%; background-color:red;">Buty</div>
    <div>lista produktów</div>
    <div style="width: 100%; background-color:red;">Odzież</div>
    <div>lista produktów</div>
    <div style="width: 100%; background-color:red;">Akcesoria</div>
    <div>lista Akcesori</div>
    <div style="width: 100%; background-color:red;">Piłki</div>
    <div>lista piłek</div>
    <div>paginacja po 10 sztuk każdej kategorii + przycisk więcej</div>
    @include('products.index')
@endsection


@section('js-files')
    <script src="{{ asset('../js/menu.js') }}"></script>
@endsection
