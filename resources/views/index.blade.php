@extends('main')

@section('content')
    <section class="promo">
        <div class="container pre-slider">
            <div class="box-slider col-10" >
                <div class="home-demo">
                    <div class="owl-carousel owl-theme">
                        @foreach($slides as $one)
                        <div class="item">
                            <img alt="" src="{{Storage::URL($one->image)}}">
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <p class="title text-center">Наши преимущества</p>
        <div class="container d-flex justify-content-center">
            <div class="" style="width: 900px;">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-3 d-flex text-center advantage flex-column align-items-center ">
                    <img alt="" src="/images/icon1.png" >
                    <p class="advatage_text" >Доступные цены</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-3 d-flex advantage text-center flex-column align-items-center ">
                    <img alt="" src="/images/icon2.png" >
                    <p class="advatage_text">Качественное обслуживание</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex advantage text-center flex-column align-items-center">
                    <img alt="" src="/images/icon3.png" >
                    <p class="advatage_text">Широкий ассортимент</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex advantage text-center flex-column align-items-center">
                    <img alt="" src="/images/icon4.png" >
                    <p class="advatage_text">Удобная отгрузка</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex advantage text-center flex-column align-items-center">
                    <img alt="" src="/images/icon5.png" >
                    <p class="advatage_text">Компьютерная колеровка</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex advantage text-center flex-column align-items-center">
                    <img alt="" src="/images/icon6.png">
                    <p class="advatage_text">акции и скидки</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="catalogue">
        <h1 class="title text-center">Каталог товаров</h1>
        <div class="container">
            <div class="row cat_">
                @foreach($products as $two)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 product_card">
                            <a href="/product/{{$two['id']}}" class="product_link">
                                @if(($two['sale']) > 0)
                                    <img class="sale" src="/images/sale.png">
                                @endif
                            <div class="col-12 product_image">

                                <img alt="" src="{{Storage::URL($two->image)}}">
                            </div>

                            <div class="col-12 product_text">
                                <p class="product_name">{{$two['name']}}</p>
                                <p class="product_price">{{$two['price']}}  {{$two->unit-> name}} </p>

                            </div></a>
                        </div>

                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-center">
                <a href="#" data-page="2" id="more" class=""><button class="more_btn"> Показать еще</button></a>
            </div>
        </div>
    </section>
    <section class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 brand_box" ><img alt="" src="/images/brand1.png" class="tecno"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 brand_box"><img alt="" src="/images/brand2.png" class="gerkules"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 brand_box"><img alt="" src="/images/brand3.png" class="paints"></div>
            </div>
        </div>
    </section>
    <section class="request">
       <div class="container">
           <p class="title text-center">Оставьте заявку и мы с вами свяжемся!</p>
           <div class="row ">
               <div class="col-12 d-flex justify-content-center">

                <form action="/sendmail" method="post" class="form_request">
                    <label><p>Введите имя*</p>
                    <input type="text" name="name" required class="form_input" maxlength="30"></label><br>
                    <label><p style="margin-top: 22px;">Введите телефон*</p>
                    <input type="tel" name="phone" required class="form_input" maxlength="20"></label>
                    <p class="form-title-lg req mt-1">* поле обязательно к заполнению</p>
                    <p class="text-center pre_btn"><button type="submit" id="send" class="form_button">Отправить</button></p>
                    @csrf
                </form>
           </div>
       </div>
        </div>
    </section>
    <section class="where">
        <p class="text-center title">Где нас найти</p>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 ya_map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A17d4a7c4261c04c1525732d7a48705d879dbf672bf68f08f12baa5cf1155adaa&amp;lang=ru_RU&amp;scroll=true"></script></div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 where_text">
                    <p><a href="https://yandex.ru/maps/1095/abakan/house/ulitsa_pushkina_211/bUgYcgVhSEAGQFtpfXtwdX5rZw==/?ll=91.421152%2C53.714283&z=16" class="where_link"> Абакан, ул. Пушкина д.211 </a></p>
                    <p><a href="tel:89134489377" class="where_link">8(913)448-93-77</a></p>
                    <p><a href="/" class="where_link">solostroy19.ru  © 2023</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <p class="title text-center">Наши партнеры</p>
        <div class="container">
            <div class="row partners_box">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12 master_box">
                    <img class="master_econom" src="/images/master_econom.png">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <p class="partners_text text-center">СТРОИТЕЛЬНО-ОТДЕЛОЧНЫЕ МАТЕРИАЛЫ <br> ПО ЛУЧШИМ ЦЕНАМ</p>
                    <p class=""><a href="https://yandex.ru/maps/11341/sayanogorsk/house/ulitsa_metallurgov_33a/bUgYdQ5lTEMAQFtpfX1xeHRgZw==/?ll=91.395567%2C53.109833&z=16" class="where_link">г.Саяногорск ул.Металлургов, 33А</a></p>
                    <p class=""><a href="tel:89832705091" class="where_link">Магазин: +7(983) 270-50-91</a></p>
                    <p class=""><a href="https://yandex.ru/maps/11341/sayanogorsk/house/shkolnaya_ulitsa_19/bUgYcgdiS0wBQFtpfXx5d3hiZA==/?ll=91.402296%2C53.086410&z=16.85" class="where_link">г.Саяногорск ул.Школьная, 19</a></p>
                    <p class=""><a href="tel:89502774279" class="where_link">Магазин: +7(950) 277-42-79</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
