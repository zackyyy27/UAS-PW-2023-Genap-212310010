<link rel="stylesheet" href="css/menu.css">

@extends('main')

<title>Menu</title>

<style>
    /* div {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
} */
</style>

@section('content')
    <div class="container-fluid" style="align-items: center; justify-content:center">
        <div class="menu-fluid bg-warning py-3">
            <h1 class="text-center" style="margin-top: 25px; font-weight:bold; color:white">Menu</h1>
        </div>

        <div class="col-md-12 text-center mt-5 mb-2 fw-bold">
            <h1>Menu Makanan Berat</h1>
            <hr>
        </div>
        @include('User.View_menu.menu_makanan')
        <div class="col-md-12 text-center mt-5 mb-2 fw-bold">
            <h1>Menu Minuman</h1>
            <hr>
        </div>
        @include('User.View_menu.menu_minuman')
        <div class="col-md-12 text-center mt-5 mb-2 fw-bold">
            <h1>Menu Snack</h1>
            <hr>
        </div>
        @include('User.View_menu.menu_snack')
    </div>
@endsection
