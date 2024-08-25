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
<!-- loader  -->

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
                            <h2>О нас</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about_box">
                            <span>Добро пожаловать в наш магазин</span>
                            <h2>О<strong class="white"> нашем салоне</strong></h2>
                            <p>Здесь мастерство парикмахеров сочетается с традициями классического ухода за волосами и бородой. Барбершопы предлагают стильные стрижки, точную окантовку, профессиональный уход за бородой и усами, а также расслабляющие процедуры, такие как горячие компрессы и бритье опасной бритвой.

                                Каждый визит в барбершоп — это больше, чем просто стрижка; это время, посвященное себе, возможность отдохнуть, пообщаться с мастерами и другими посетителями, обсудить последние новости или просто насладиться тишиной и атмосферой мужского клуба.</p>
                            <a href="{{route('about')}}">Читать далее</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about_img">
                            <figure><img src="{{asset('assets/heron/images/about_img.png')}}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->

        <!-- footer -->
        @include('teil.footer')

    </div>

    <div class="overlay"></div>
@include('teil.java')

</body>

</html>
