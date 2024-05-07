<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="\css\app.css"><link rel="stylesheet" href="\css\adaptive.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Строительные материалы для отделки и ремонта! SOLOстрой это: - Товары ведущих мировых и отечественных производителей! - Наличие широкого ассортимента по доступным ценам!- Скидки и акции! Мы находимся в доступном для Вас месте 'Центр города'! - Большая парковка, удобные подъездные пути, хорошая транспортная развязка, комфортный проезд для большегрузов!- Наши специалисты помогут Вам подобрать нужный для Вас товар! Мы фокусируемся на том, что действительно важно для обустройства и создания атмосферы уюта Вашего дома и поможем сделать правильный выбор.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="shortcut icon" href="/images/favicon-32x32.png" type="image/x-icon">
    <title>SoloСтрой - стройматериалы в Абакане</title>
</head>
<body>
    <header data-headroom class="header headroom headroom--top desktop">
        <div class="container top_header">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 nav_adress">
                    <a  class="adress" href="https://yandex.ru/maps/1095/abakan/house/ulitsa_pushkina_211/bUgYcgVhSEAGQFtpfXtwdX5rZw==/?ll=91.421152%2C53.714283&z=16">Абакан, ул. Пушкина д.211 </a>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 nav_number">
                    <a href="tel:89134489377" class="number">8(913)448-93-77</a>
                </div>
                <div class="col-xl-1 col-md-1 col-sm-1 col-1 search_toggler">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="bi bi-search"></i></span>
                    </button>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 vk_logo">
                    <a target="_blank" href="https://vk.com/solostroy_abakan"><img src="/images\vk_logo.png"  alt="" height="30px" width="30px"></a>
                </div>
                <div class="text-end some_class col-lg-7 col-md-3 col-sm-2 col-2 menu-btn-wrapper">
                </div>
            </div>
        </div>
        <div class="container container-fluid some_class col-10">
            <div class="navbar-collapse collapse" id="navbarNav" style="">

                <div class="header_nav d-flex justify-content-center ">
                    <div class="col-md-6 col-sm-6 col-6 search_wrap ">
                        <form action="/search" class="input-group">
                            <input type="search" name="t" class="search_input" placeholder="Поиск" />
                            <button type="submit" class="search_button">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="hat container align-items-center desktop">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 logo">
                <a href="/"><img alt="" src="/images/logo.png" class=""></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 drop_list">
                <div class="dropdown">
                    <a class="dropdown-toggle drop_list"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Каталог
                    </a>
                    @php
                        $categories= App\Models\Category::where('category_id',0)->get()
                    @endphp

                        <ul class="dropdown-menu category-list" aria-labelledby="dropdownMenuLink">
                        @foreach($categories as $one)
                            <li><a class="dropdown-item" href="/category/{{$one['id']}}">{{$one['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-12 search">
                <form action="/search" class="input-group">
                    <input type="search" name="t" class="search_input" placeholder="Поиск" />
                    <button type="submit" class="search_button">
                        <img src="/images/search.png">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <header data-headroom class="header headroom headroom--top mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-2 logo"><a href="/"><img alt="" src="/images/logo.png" class=""></a></div>
                <div class="col-md-5 col-sm-7 col-7 d-flex justify-content-center align-items-center"><a class="adress" href="https://yandex.ru/maps/1095/abakan/house/ulitsa_pushkina_211/bUgYcgVhSEAGQFtpfXtwdX5rZw==/?ll=91.421152%2C53.714283&z=16">Абакан, ул. Пушкина д.211 </a></div>
                <div class="col-md-1 col-sm-1 col-1 search_toggler"><button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="bi bi-search"></i></span>
                    </button></div>
                <div class="col-md-3 col-sm-2 col-2 d-flex justify-content-center align-items-center"><a target="_blank" href="https://vk.com/solostroy_abakan"><img src="/images/vk_logo.png" alt="" height="30px" width="30px"></a></div>
                <div class="container d-flex justify-content-center">

                </div>
            </div>
        </div>
        <div class="container container-fluid some_class col-10">
            <div class="navbar-collapse collapse" id="navbarNav" style="">

                <div class="header_nav ">
                    <div class="col-md-12 col-sm-12 col-12 search_wrap ">
                        <form class="input-group">
                            <input type="search" class="search_input" placeholder="Поиск" />
                            <button type="submit" class="search_button">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="container mobile search">
        <div class="row ">
            <div class="col-md-12 col-sm-12 col-12 drop_list">
                <div class="dropdown">
                    <a class="dropdown-toggle drop_list"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Каталог
                    </a>
                    @php
                        $categories= App\Models\Category::where('category_id',0)->get()
                    @endphp

                    <ul class="dropdown-menu category-list" aria-labelledby="dropdownMenuLink">
                        @foreach($categories as $one)
                            <li><a class="dropdown-item" href="/category/{{$one['id']}}">{{$one['name']}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12 search ">
                <form action="/search" class="input-group">
                    <input type="search" name="t" class="search_input" placeholder="Поиск" />
                    <button type="submit" class="search_button">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @guest


        @if (Route::has('register'))

        @endif
    @else

            <a id="navbarDropdown" class="btn btn-success dropdown-toggle admin_drop" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->login }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('home') }}">
                    Кабинет
                </a>


                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>

    @endguest
    @yield('content')
    <div class="cookie_notice">
        Оставляя свои контактные данные, вы подтверждаете свое совершеннолетие, соглашаетесь на обработку персональных данных в соответствии с Правовой информацией        <div>
            <a class="cookie_btn" id="cookie_close" href="#close">Ок</a>
            <a class="cookie_btn" href="/privacy">Политика конфиденциальности</a>
        </div>
    </div>
    <div class="phone">
        <a class="mini_phone" href="tel:89134489377"><img src="/images/phone.png" height="60px" width="60px">
        </a>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="row">
                        <div class="col-12 footer_logo">
                            <a href="/"><img src="/images/logo.png" class=""></a>
                        </div>
                        <div class="col-12 footer_text">
                            <p><a  class="adress_white " href="https://yandex.ru/maps/1095/abakan/house/ulitsa_pushkina_211/bUgYcgVhSEAGQFtpfXtwdX5rZw==/?ll=91.421152%2C53.714283&z=16">Абакан, ул. Пушкина д.211 </a></p>
                            <p><a href="tel:89134489377" class="number_white">8(913)448-93-77</a></p>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="\scripts\script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js" integrity="sha512-wT7uPE7tOP6w4o28u1DN775jYjHQApdBnib5Pho4RB0Pgd9y7eSkAV1BTqQydupYDB9GBhTcQQzyNMPMV3cAew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.js" integrity="sha512-Y47dAXkgN6PPONrqjtovQ0O37S0/WFryYxjVOFaKjZSYS0+DHUywDDFgkXrRkaLNcWZzxXZn7POR1fgjNKD4ow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/jQuery.headroom.js" integrity="sha512-pmwEYLNG99yaAFqU2lDdLO/34xv4lQSHo+STfaRqxY57FeIBKvQv72A1F3xMYNphxxUwO+jnnYiEDdqpT4dKfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
