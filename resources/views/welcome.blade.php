@extends('layouts.app')


@section('content')
    <div style="margin:56px -15px 0px -15px;">
        <div id="carouselExampleAutoplaying" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/assets/advertisement/boots.jpg" class="d-block w-100" alt="boots">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/advertisement/boots1.jpg" class="d-block w-100" alt="boots1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/advertisement/boots3.jpg" class="d-block w-100" alt="boots3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div>
        @endsection


        @section('js-files')
            <script src="{{ asset('../js/menu.js') }}"></script>
        @endsection
