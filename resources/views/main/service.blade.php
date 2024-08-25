<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->

@include('teil.link')
<!-- body -->
</head>

<body class="main-layout">

<div class="wrapper">
    <!-- end loader -->

    <div class="sidebar">
        <!-- Sidebar  -->
        @include('teil.menu')

    </div>

    <div id="content">
        <!-- header -->
    @include('teil.header')
    <!-- end header -->

        <div class="yellow_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Наши услуги</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service -->
        @section('content')

        <div id="service" class="service">
            <div class="container">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{ asset('assets/heron/images/ser1.png') }}"></figure>
                                                <h3>Чистое бритье</h3>
                                                <p>Мы используем только качественные инструменты и техники, чтобы обеспечить вам гладкую и комфортную кожу. </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Стильные стрижки</h3>
                                                <p>Наши стильные стрижки создаются с учетом последних тенденций и индивидуальных предпочтений каждого клиента.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Маска для лица</h3>
                                                <p>Мы используем только высококачественные продукты, которые очищают и увлажняют кожу, улучшая её текстуру.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
                                                <h3>Чистое бритье</h3>
                                                <p>Мы используем только качественные инструменты и техники, чтобы обеспечить вам гладкую и комфортную кожу.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Стильные стрижки</h3>
                                                <p>Наши стильные стрижки создаются с учетом последних тенденций и индивидуальных предпочтений каждого клиента.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Маска для лица</h3>
                                                <p>Мы используем только высококачественные продукты, которые очищают и увлажняют кожу, улучшая её текстуру.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
                                                <h3>Чистое бритье</h3>
                                                <p>Мы используем только качественные инструменты и техники, чтобы обеспечить вам гладкую и комфортную кожу.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Стильные стрижки</h3>
                                                <p>Наши стильные стрижки создаются с учетом последних тенденций и индивидуальных предпочтений каждого клиента.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Маска для лица</h3>
                                                <p>Мы используем только высококачественные продукты, которые очищают и увлажняют кожу, улучшая её текстуру.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end service -->

        <!-- footer -->
        @include('teil.footer')

    </div>

    <div class="overlay"></div>
@include('teil.java')

</body>

</html>