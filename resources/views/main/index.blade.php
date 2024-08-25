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
        <!-- start slider section -->
        <div class="slider_section banner_bg">
            <img src="{{asset('assets/heron/images/banner.jpg')}}">
            <div class="container">
                <div class="text_box">
                    <span>Стильная стрижка </span>
                    <h1>для<br>
                        нового образа.</h1>
                    <a href="{{route('contact')}}">Свяжитесь с нами</a>
                </div>
            </div>
        </div>

        <!-- end slider section -->

        <!-- about -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about_box">
                            <span>Добро пожаловать в наш магазин</span>
                            <h2>О <strong class="white"> нашем салоне</strong></h2>
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
        <!-- service -->
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourheading">
                            <h2>Наши <strong class="white_ll"> услуги </strong></h2>
                            <span>Мы предлагаем комплексный подход к уходу за внешностью.</span>
                        </div>
                    </div>
                </div>

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
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
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
                    </div>

                </div>

            </div>
        </div>
        <!-- end service -->
        <!-- pricing -->
        <div class="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourheading">
                            <h2>Таблица <strong class="white"> цен</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mar_bottom">
                        <div class="pricing_img">
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
                                    <h2>Время <strong class="white"> работы</strong></h2>
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

            <!-- our barbers -->
            <!-- section -->
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2> Наши <strong class="white"> барберы</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/1.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Джон Дусс</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/2.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Джон Вик</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/3.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Десмон Джон</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/1.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Майк блэк</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/2.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Дуэйн Джо</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/3.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Томас Пак</h3>
                                        <h4>стрижка</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- end our barbers -->
            <!-- contact -->
            <div class="yellow_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Контакт</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="title">
                                <h2>Запросить <strong class="white"> обратный звонок</strong></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Имя" type="text" name="name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Номер телефона" type="text" name="phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Описание" type="text" name="description"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input type="submit" value="Отправить" class="btn btn-primary form-control">

                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="img-box">
                                <figure><img src="{{asset('assets/heron/images/img.jpg')}}" alt="img" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact -->
            @include('teil.footer')
        </div>

        <div class="overlay"></div>
@include('teil.java')
</body>

</html>
