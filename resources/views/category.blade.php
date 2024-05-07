@extends('main')

@section('content')
    <div class="container">

        <h1 class="title cat">{{$category['name']}}<sup class="counter">@if(count($products) =='0'){{count($subcategory ->product)}}</sup>
            @else{{count($products)}}@endif
        </h1>
        <div class="row">

                @foreach($category->subcategory as $one)
                    <div class="col-lg-3 col-xl-2 col-md-3 col-sm-4 col-6"><a href="/subcategory/{{$one['id']}}"><button class="subcat_btn">{{$one['name']}}</button></a></div>
                @endforeach

    </div>
    </div>
    <section class="catalogue 111">
        <div class="container">
            <div class="row">

    @if(count($products) =='0')
        @if(count($subcategory ->product) == '0')
            <p class="title text-center" style="margin:150px 0 200px 0">Здесь пока ничего нет</p>
            <style>.catalogue{background-image: none;}</style>
        @endif

        @foreach($subcategory ->product as $two)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 product_card">
                <a href="/product/{{$two['id']}}" class="product_link">
                    @if(($two['sale']) == 1)
                        <img class="sale" src="/images/sale.png">
                    @endif
                    <div class="col-12 product_image">
                        <img alt="" src="{{Storage::URL($two->image)}}">
                    </div>
                    <div cl ass="col-12 product_text">
                        <p class="product_name">{{$two['name']}}</p>
                        <p class="product_price">{{$two['price']}} {{$two->unit-> name}}</p>

                    </div></a>
            </div>
        @endforeach

    @else


                @foreach($products as $two)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 product_card">
                        <a href="/product/{{$two['id']}}" class="product_link">
                            @if(($two['sale']) == 1)
                                <img class="sale" src="/images/sale.png">
                            @endif
                            <div class="col-12 product_image">
                                <img alt="" src="{{Storage::URL($two->image)}}">
                            </div>
                            <div class="col-12 product_text">
                                <p class="product_name">{{$two['name']}}</p>
                                <p class="product_price">Цена:{{$two['price']}}  {{$two->unit-> name}} </p>

                            </div></a>
                    </div>

                @endforeach



    @endif
            </div>
    </div>
    </section>
@endsection

