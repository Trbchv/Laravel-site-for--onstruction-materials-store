@foreach($paginate as $two)
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
