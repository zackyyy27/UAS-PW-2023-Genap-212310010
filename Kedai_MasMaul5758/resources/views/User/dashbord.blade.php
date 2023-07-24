@extends('main')

@section('content')
    <title>Dashboard</title>

    <style>
        section {
            margin-top: 50px;
            margin-bottom: 80px
        }
    </style>
    {{-- carousel  --}}

    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" id="1">
                <div class="carousel-item active" style="height: 452px">
                    <img src={{ '../assets/Frame1.png' }} class="d-inline-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 452px">
                    <img src={{ '../assets/slide2.jpg' }} class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 452px">
                    <img src={{ '../assets/slide3.jpg' }} class="d-block w-100" alt="...">
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
    </section>

    <section>
        <div class="container overflow-hidden" style="justify-content:space-between">
            <div class="row gx-5">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="">
                        <h1 id="2" class="fw-bold">TENTANG KAMI</h1>
                        <p>Kedai Mas Maul 5758 atau yang sering di kenal warung
                            kuning /arb adalah sebuah usaha UMKM yang
                            bergerak dalam bidang food and beverage (F&B).</p>
                        <p>Sejarah berdirinya Kedai Mas Maul 5758 sebelum
                            memulai buka usahanya di kampus. Mas Maul
                            sebelumnya berjualan hanya di depan rumah. yang
                            dijual saat itu hanya makanan ringan seperti takoyaki,
                            pisang goreng krispi, roti bakar bunger sosis, dan aneka
                            minuman rasa lainnya. Setelah berjualan selama hampir
                            2 hingga 3 bulan, Mas Maul berpikir untuk membuka
                            dan memperbesar jualannya.</p>
                        <p>Sebelum menetap di kampus IBIK atau RanggaGading,
                            Mas Maul sempat mencari tempat di Lawang Seketeng,
                            Jalan Juanda, hingga Bubulak. Namun, tidak
                            menemukan tempat yang strategis. Saat berkunjung ke
                            IBIK, Mas Maul melihat ruko kosong yang menarik
                            perhatiannya. Setelah itu, Mas Maul menghubungi
                            pemilik ruko kosong tersebut dan setelah berbincang-
                            bincang, pemilik ruko tersebut sepakat untuk disewa
                            selama satu tahun ke depan. Dari situlah Mas Maul
                            mendirikan kedai tersebut</p>
                        <p>Sebelum menetap di kampus IBIK atau RanggaGading,
                            Mas Maul sempat mencari tempat di Lawang Seketeng,
                            Jalan Juanda, hingga Bubulak. Namun, tidak
                            menemukan tempat yang strategis. Saat berkunjung ke
                            IBIK, Mas Maul melihat ruko kosong yang menarik
                            perhatiannya. Setelah itu, Mas Maul menghubungi
                            pemilik ruko kosong tersebut dan setelah berbincang-
                            bincang, pemilik ruko tersebut sepakat untuk disewa
                            selama satu tahun ke depan. Dari situlah Mas Maul
                            mendirikan kedai tersebut</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 ">
                    <img src="../assets/Kedai.png" alt="" class="pp" style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>

        </div>

    </section>

    {{-- END CAROUSEL  --}}

    {{-- START ABOUTUS  --}}

    <section>
        <div class="menu">
            <h1 class="text-center fw-bold ">MENU FAVORIT</h1>
            <P class="text-center">Ini adalah menu favorit yang tersedia di kedai kami dan sangat disukai <br>
                oleh para pelanggan kami.</P>

            <div class="container text-center " style="margin-top: 5%">
                <div class="row align-items-start ">
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto" style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp" style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto" style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/NasiAyam.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto " style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp" style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END ABOUTUS  --}}

    {{-- START MENU  --}}

    <section>
        <div class="col text-center px-5">
            <div class="tagline text-center">
                <h1>MENU</h1>
                <div class="option flex-row w-200" style="margin-top: 5%">
                    <a class="opsi border border-warning"
                        style="padding: 5px; margin-left:5px, margin-right:5px; color:black" href="#">FOOD</a>
                    <a class="opsi border border-warning"
                        style="padding: 5px; margin-left:5px, margin-right:5px; color:black" href="#">DRINK</a>
                    <a class="opsi border border-warning"
                        style="padding: 5px; margin-left:5px, margin-right:5px; color:black" href="#">SNACK</a>
                </div>
            </div>

            <div class="" style="margin-top: 5%">
                <div class="row align-items-start ">
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto" style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto" style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/NasiAyam.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto " style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top:20px">
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto " style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 shadow-lg bg-body-tertiary" href="#">
                        <div class="w-auto " style="height: auto">
                            <div class="w-100  d-flex align-item-center justify-content-center" style="height: 300px">
                                <img src="../assets/Mie.png" alt="" class="pp"
                                    style="width: 70%; height: 70%;">
                            </div>
                            <div class="col" style="margin-top: 5%">
                                <span>Rp 16.000</span>
                                <p class="fw-bold fs-25px" style="margin-top: 3%">Indomie Telur Kornet Keju</p>
                                <p style="margin-top: 3%">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Fuga
                                    expedita laudantium
                                    dignissimos dolore consequatur voluptate quo sint quia itaque a maxime iusto, sunt
                                    corrupti
                                    officia quod eveniet, obcaecati unde rem?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- END MENU  --}}

    {{-- START OUTLETS  --}}

    <section class="container p-5">
        <h1 class="text-center">OUTLETS</h1>
        <div class="row justify-content-evenly" style="margin-top: 5%">
            <div class="col-12 col-sm-4 text-start">
                <div class="map bg-warning" style="width: 350px; height:350px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.70798722468325!2d106.7995262908822!3d-6.606127272579998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5ead182a877%3A0x5dcfd17734a4820f!2sKedai%20Mas%20Maul%205758!5e0!3m2!1sid!2sid!4v1686984550541!5m2!1sid!2sid"
                        width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h6 style="margin-top: 20px"><b>KEDAI MAS MAUL 5758</b></h6>
                <p>Jl. Rangga Gading, RT.01/RW.08,
                    Gudang, Kota Bogor, Jawa Barat</p>
                <p><b>Open at 08.00 - 10.00</b></p>
                <p><b>08xxxxxxxxxxx</b></p>
            </div>
            <div class="col-12 col-sm-4 text-start">
                <div class="map bg-warning" style="width: 350px; height:350px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.70798722468325!2d106.7995262908822!3d-6.606127272579998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5ead182a877%3A0x5dcfd17734a4820f!2sKedai%20Mas%20Maul%205758!5e0!3m2!1sid!2sid!4v1686984550541!5m2!1sid!2sid"
                        width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h6 style="margin-top: 20px"><b>KEDAI MAS MAUL 5758</b></h6>
                <p>Jl. Rangga Gading, RT.01/RW.08,
                    Gudang, Kota Bogor, Jawa Barat</p>
                <p><b>Open at 08.00 - 10.00</b></p>
                <p><b>08xxxxxxxxxxx</b></p>
            </div>
        </div>

    </section>

    {{-- END OUTLETS  --}}

    {{-- START REVIEW  --}}

    <section>
        <div class="" style=justify-content:space-between">
            <h1 class="text-center">ULASAN</h1>
            <div class="row justify-content-center" style="margin-top: 5%">
                @foreach ($feedbacks as $feedback)
                    <div class="col-12 col-md-5 col-sm-12 mb-4 mx-4 border shadow py-2">
                        <div class="row justify-content-center" style="padding: 5px">
                            <span class="fw-bold">{{ $feedback->nama }}</span> <br>
                            <span class="text-secondary">{{ $feedback->email }}</span>
                            <p>{{ $feedback->pesan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- END REVIEW  --}}

    {{-- START CONTACT US  --}}

    <section>
        <div class="container">
            <div class="text-center">
                <h1>HUBUNGI KAMI</h1>
                <p style="margin-top: 2%">Halo pelanggan Setia Kedai Mas Maul 5758, jika ada kritik, <br>
                    keluhan, saran, atau pertanyaan ? hubungi kami melalui form dibawah ini</p>
                <div class="form">
                    <form action="/dashbord" method="POST">
                        @csrf
                        <input type="text" id="nama" name="nama" placeholder="Nama"
                            style="width: 70%; margin-top:2%; border-radius:5px; padding:10px"><br>
                        <input type="email" id="email" name="email" placeholder="Email"
                            style="width: 70%; margin-top:2%; border-radius:5px; padding:10px"><br>
                        <textarea type="text" id="pesan" name="pesan" placeholder="pesan"
                            style="width: 70%; height:300px; margin-top:2%; border-radius:5px; padding:10px"></textarea><br>
                        <button type="submit" class="btn btn-warning"
                            style="margin-top:10px; justify-content:flex-start">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- END CONTACT US  --}}
@endsection
