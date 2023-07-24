<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5" style=" border-bottom-width:1px">
        <div class="navbar-logo">
            <a href={{ url('/dashbord') }}>
                <img src={{ '../assets/Kedai.png' }} alt="Logo" class="logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href={{ url('/dashbord') }}
                    style="margin-inline: 20px">HOME</a>
                <a class="nav-link" href={{ url('/about') }} style="margin-inline: 20px">ABOUT</a>
                {{-- <a class="nav-link" href="/" style="margin-inline: 20px">FAVORITE</a> --}}
                <a class="nav-link" href="/menu" style="margin-inline: 20px">MENU</a>
                <a class="nav-link" href="/outlet" style="margin-inline: 20px">OUTLETS</a>
                {{-- <a class="nav-link" href="/" style="margin-inline: 20px">REVIEW</a> --}}
                <a class="nav-link" href="/" style="margin-inline: 20px">CONTACT</a>
            </div>
            <a href="">
                <div class="login text-center">
                    <a href="/login" style="text-decoration: none">
                        <span class="" style="color:white; font-size:10px">Halaman Admin</span>
                    </a>
                </div>
            </a>
        </div>
    </div>
</nav>
