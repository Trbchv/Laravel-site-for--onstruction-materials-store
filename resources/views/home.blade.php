@extends('main')

@section('content')
<p class="title text-center">Панель администратора</p>
<section class="promo">
    <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                    <div class="col-4 m-3 card add_slide">
                        <h3 class="text-center">Добавить слайд</h3>
                        <form action="/saveslide" enctype="multipart/form-data" method="POST" class="card add_form justify-content-between">
                        <input type="file" required name="image" class="form-control">
                        <button type="submit" class="btn btn-success">Загрузить</button>
                        @csrf
                    </form>
                </div>
            </div>
                    @foreach($slide as $one)
                        <div class="item admin_slide col-3">
                            <img alt="" src="{{Storage::URL($one->image)}}">
                                <p class="text-center mt-1"><a href="/home/delslide/{{$one->id}}"class="btn btn-danger">Удалить</a></p>

                        </div>
                    @endforeach
        </div>
    </div>

</section>
<section class="catalogue">
    <div class="container card">
    <p class="title text-center mt-2">Товары <sup class="counter">{{count($products)}}</sup></p>
        <div class="col-12 d-flex justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 search">
                <form action="/home/adminsearch" class="input-group">
                    <input type="search" name="t" class="search_input" placeholder="Поиск" />
                    <button type="submit" class="search_button">
                        <img src="/images/search.png">
                    </button>
                </form>
            </div>
        </div>
    <p class=" text-end"><a href="/home/addproduct" class="btn btn-success ">Добавить товар</a></p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Изображение</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Категория</th>
                        <th>Акция</th>
                        <th>Артикул</th>
                        <th>Цена</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($products as $two)
                <tr class="admin_table_row">
                    <td><img data-fancybox alt="" class="admin_table_image" src="{{Storage::URL($two->image)}}"></td>
                    <td><a href="/product/{{$two['id']}}" class="product_link"><p class="product_name descr">{{$two['name']}}</p></a></td>
                    <td><p class="product_name descr">{{$two['description']}}</p></td>
                    <td><p class="product_name">{{$two->category->name}}</p></td>
                    <td><p class="product_name">
                    @if($two->sale == 1)
                        да
                    @else
                        нет
                    @endif</p>
                    </td>
                    <td><p class="product_name">{{$two['art']}}</p></td>
                    <td><p class="product_price">{{$two['price']}} <br> {{$two->unit-> name}} </p></td>
                    <td class="btns">
                        <a class="btn btn-warning admin_btn" href="/home/editproduct/{{$two->id}}">Редактировать</a>
                        <a  class="btn btn-danger admin_btn" id="delete" href="/home/delproduct/{{$two->id}}">Удалить</a>
                        <input type="hidden" name="scroll" value="">
                    </td>
                </tr>
            @endforeach
                </tbody>
            </table>
        </div>
</section>

        <style>
            .add_slide{
                display: flex;
                height: 169px;
                justify-content: space-evenly;
            }
            table{
                background-color: white;
            }
            .descr{
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .admin_btn{
                width: 155px;
                margin: 10px 0 10px 0;
            }
            .add_form{
                height: 90px;
            }
            .product_name{
                font-weight: 400;
                height: 94px;
            }
            .product_price {
                font-weight: 400;
                width: 75px;
            }
            .admin_table_row{
                height: 140px !important;
            }
        </style>
@endsection
