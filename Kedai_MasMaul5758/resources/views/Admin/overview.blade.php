@extends('template-admin')
@section('content_admin')
    <title>Overview</title>

    <link rel="stylesheet" href=".assets/css/admin.css">

    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-md-6">
                <h2 class="fw-bold">Sales Overview</h2>
                <p style="font-size: 16px">Track, manage, and forecast your customer and orders.</p>
            </div>
            <div class="col-md-6 text-end">
                <div class="row">
                    <div class="col-md-12">
                        <p>Saturday, 23 Februari 2023</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="dropdown d-inline me-2">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="background-color: #F5D247">
                                Showing: This year
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">Week</a></li>
                            </ul>
                        </div>
                        <a href="#" class="btn" style="background-color: #F5D247;">Export data <img
                                src="/assets/1.svg"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-md-3 mx-2"
                style="background-color: #F5D247; width:250px; border-radius:5%; align-items:center; justify-content:center">
                <div class="kotak p-2">
                    <p class="pt-3">Total Sales</p>
                    <p class="fw-bold mt-3">Rp. 180.000.000</p>
                    <p>In 1 Years 2022</p>
                </div>
            </div>
            <div class="col-md-3 mx-2"
                style="background-color: #F5D247; width:250px; border-radius:5%; align-items:center; justify-content:center">
                <div class="kotak p-3">
                    <p class="pt-3">Total Order</p>
                    <p class="fw-bold mt-3">3.250 pcs</p>
                    <p>In 1 Years 2022</p>
                </div>
            </div>
            <div class="col-md-3 mx-2"
                style="background-color: #F5D247; width:250px; border-radius:5%; align-items:center; justify-content:center">
                <div class="kotak p-3">
                    <p class="pt-3">Total Customer</p>
                    <p class="fw-bold mt-3">12.000</p>
                    <p>In 1 Years 2022</p>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-md-6">
                <h2 class="fw-bold">Statement</h2>
            </div>

            <!-- CHARTS -->

            <!DOCTYPE HTML>
            <html>

            <head>
                <script type="text/javascript">
                    window.onload = function() {
                        var chart = new CanvasJS.Chart("chartContainer", {
                            title: {
                                text: "JANUARI - DESEMBER 2022",
                                fontColor: "#6A5ACD"
                            },
                            axisY: {
                                interlacedColor: "rgb(255,250,250)",
                                gridColor: "#FFBFD5"
                            },
                            data: [{
                                type: "column",
                                color: "black",
                                dataPoints: [

                                    {
                                        x: 10,
                                        y: 71
                                    },
                                    {
                                        x: 20,
                                        y: 55
                                    },
                                    {
                                        x: 30,
                                        y: 50
                                    },
                                    {
                                        x: 40,
                                        y: 65
                                    },
                                    {
                                        x: 50,
                                        y: 95
                                    },
                                    {
                                        x: 60,
                                        y: 68
                                    },
                                    {
                                        x: 70,
                                        y: 28
                                    },
                                    {
                                        x: 80,
                                        y: 34
                                    },
                                    {
                                        x: 90,
                                        y: 14
                                    },
                                    {
                                        x: 10,
                                        y: 71
                                    },
                                    {
                                        x: 20,
                                        y: 55
                                    },
                                    {
                                        x: 30,
                                        y: 50
                                    }

                                ]
                            }]
                        });
                        chart.render();
                    }
                </script>
                <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
            </head>

            <body>
                <div id="chartContainer" style="height: 300px; width: 100%;">
                </div>
            </body>

            </html>

            <div>
                <div class="row p-3">

                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-6">
                    <h2 class="fw-bold">Favorit Menu</h2>
                </div>
            </div>

            <div class="row px-5 text-center fw-bold" style="justify-content: center;">
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>NASI AYAM SERUNDENG</p>
                        <img src="/assets/img/ayam-surendeng.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>RICE BOWL</p>
                        <img src="/assets/img/rice-bowl.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>HIHANG HOHENG OREO</p>
                        <img src="/assets/img/hihang-hoheng-oreo.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>ICE MANGO</p>
                        <img src="/assets/img/ice-mango.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>ICE CHOCOLATE</p>
                        <img src="/assets/img/ice-chocolate.svg" alt="">
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="kotak2">
                        <p>ICE TARO</p>
                        <img src="/assets/img/es-taro.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endsection
