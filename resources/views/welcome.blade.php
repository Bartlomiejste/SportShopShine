@extends('layouts.app')

@section('content')
    <div style="background-color: red; margin-top:50px; padding: 50px; height:100px">
        <p>strona główna projektu</p>
    </div>
@endsection

@section('js-files')
    <script src="{{ asset('../js/menu.js') }}"></script>
@endsection
