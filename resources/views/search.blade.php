@extends('main')

@section('content')

        @if (count($search) == 0)

            <div class="container"><p class="title">Нет результатов</p></div>
            <style>
                footer{
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    z-index: -1;
                }
            </style>
        @else
            <div class="container"><p class="title">Результаты по вашему запросу<sup class="counter">{{count($search)}}</sup> </p></div>
            <section class="catalogue">
            <div class="container">


                <div class="container">
                    <div class="row">

                        @foreach($search as $one)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 product_card">
                                <a href="/product/{{$one['id']}}" class="product_link">
                                    @if(($one['sale']) == 1)
                                        <img class="sale" src="/images/sale.png">
                                    @endif
                                    <div class="col-12 product_image">
                                        <img alt="" src="{{Storage::URL($one->image)}}">
                                    </div>
                                    <div class="col-12 product_text">
                                        <p class="product_name">{{$one['name']}}</p>
                                        <p class="product_price">{{$one['price']}} {{$one->unit-> name}}</p>

                                    </div></a>
                            </div>

                        @endforeach


                    </div>
                </div>
            </section>

        @endif
    </div>
    <style>
        .catalogue {
            background-image: url(/images/wooden_background.png);
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 40px 15px 110px 15px;
    </style>
@endsection
