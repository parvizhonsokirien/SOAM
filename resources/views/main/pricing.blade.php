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
<!-- body -->

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
                            <h2>Таблица цен</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pricing -->
        <div class="pricing">
            <div class="container">

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mar_bottom">
                        <div class="{{asset('assets/heron/pricing_img')}}">
                            <figure><img src="{{asset('assets/heron/images/vvv.png')}}" alt="#" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pad_left">
                        <div class="pricing_box">
                            <div class="list">
                                <ul>
                                    <li><span class="float-left">Стрижка </span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Плавный переход </span><span class="float-right">$ 40</span></li>
                                    <li><span class="float-left">Акантовка</span><span class="float-right">$ 30</span></li>
                                    <li><span class="float-left">Классика</span><span class="float-right">$ 35</span></li>
                                </ul>

                                <ul>
                                    <li><span class="float-left">Стрижка</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Подрав. усов</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Подрав. бороды</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Окрашивание</span><span class="float-right">$ 50</span></li>
                                </ul>
                                <a href="{{route('about')}}">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="opening">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ourheading">
                                    <h2>Время<strong class="white"> работы</strong></h2>
                                </div>
                            </div>
                        </div>
                        <div class="opening_bg">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="times">
                                        <ul>
                                            <li><span>Понедельник</span><span class="float-right">от 9:00       <strong class="bbbb">до 21:00</strong></span></li>
                                            <li><span>Вторник </span><span class="float-right">от 9:00       <strong class="bbbb">до  9:00</strong></span></li>
                                            <li><span>Среда</span><span class="float-right">от 9:00      <strong class="bbbb">до  9:00</strong></span></li>

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="times">
                                        <ul>
                                            <li><span>Четверг </span><span class="float-right">от 9:00       <strong class="bbbb">до 21:00</strong></span></li>
                                            <li><span>Пятница</span><span class="float-right">от 9:00       <strong class="bbbb">до 21:00</strong></span></li>
                                            <li><span>Суббота</span><span class="float-right">от 9:00        <strong class="bbbb">до 21:00</strong></span></li>
                                            <li><span>Воскресенье</span><span class="float-right">Закрыто</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Pricing -->

            </div>

            <!-- footer -->
            @include('teil.footer')

        </div>

        <div class="overlay"></div>
@include('teil.java')

</body>

</html>
