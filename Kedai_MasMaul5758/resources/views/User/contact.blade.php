@extends('main')
@section('content')
    <style>
        span {
            margin-left: 10px;
            font-size: 25px
        }

        a {
            margin-left: 10px;
            font-size: 25px;
            text-decoration: none
        }

        .contact {
            margin-bottom: 10px
        }
    </style>

    <div class="border border-dark" style="justify-content:center; align-items:center">
        <h1 class="text-center">Contact Us</h1>
        <div class="col me-6 m-auto d-grid  mt-5" style="align-items: center; justify-content: center;">
            <div class="contact">
                <img src="../assets/WA.png" alt="" class="" style="width:50px; height:auto">
                <span>08xxxxxxxx</span> <br>
            </div>
            <div class="contact">
                <img src="../assets/Telp.png" alt="" class="" style="width:50px; height:auto">
                <span>08xxxxxxxx</span> <br>
            </div>
            <div class="contact">
                <img src="../assets/IG.png" alt="" class="" style="width:50px; height:auto">
                <a href="https://www.instagram.com/kedai_masmaul5758/?hl=id">Mas maul5758</a>
            </div>
            <div class="contact">
                <img src="../assets/tiktok.png" alt="" class="" style="width:50px; height:auto">
                <a href="https://www.tiktok.com/@masmaul5758?_t=8e097h9SBkX&_r=1" class="no-underline">Mas maul5758</a>
            </div>
        </div>

    </div>
@endsection
