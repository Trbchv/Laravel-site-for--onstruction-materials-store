@extends('main')

@section('content')
    <section class="product_box">
        <div class="container">
            <h1 class="product_title">{{$product['name']}}</h1>
            @if(($product['sale']) > 0)
                <img class="one_sale" src="/images/sale.png">
            @endif
        </div>
        <div class="container product">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 col-12 d-flex justify-content-center ">

                    <img class="single_product_image" src="{{Storage::URL($product->image)}}" alt="">
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12">
                    <p class="single_product_price">{{$product['price']}} {{$product->unit-> name}}</p>
                    <p class="single_product_description">{{$product['description']}}
                    <p class="single_product_description">Артикул: {{$product['art']}}</p></p>


                </div>
            </div>
        </div>
    </section>
@endsection
