<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="css/bootstrap.min.css">
{{-- <link rel="stylesheet" href="css/Dftrproduct.css"> --}}

<title>Show Product</title>

<style>
    td {
        vertical-align: middle;
        border-width: 1px
    }

    .Font {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    .JudulCol {
        opacity: 50%;
    }
</style>

@extends('template-admin')
@section('content_admin')
    <div class="px-5 my-5">
        @if (session()->has('succes'))
            <div class="alert alert-succes" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-center"><b>DAFTAR MENU</b></h1>
        <div class="col-12 border border-dark p-3 my-3">
            <a href="/Admin/product/create" class="btn btn-primary mb-3" style="width: 200px; height:35px">Tambah
                product</a>
            @include('Admin.product.table-view.table_makanan')
            @include('Admin.product.table-view.table_minuman')
            @include('Admin.product.table-view.table_snack')
        </div>
    </div>
@endsection
