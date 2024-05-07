@extends('main')

@section('content')
    <div class="container">
        <h1 class="title cat">{{$subcategory['name']}}<sup class="counter">{{count($subcategory ->product)}}</sup></h1>
    </div>
    @if(count($subcategory ->product )=='0')

        <p class="title text-center" style="margin:150px 0 200px 0">Здесь пока ничего нет</p>

    @else
    <section class="catalogue">
        <div class="container">
            <div class="row">
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
                @endif
            </div>
        </div>
    </section>

@endsection
