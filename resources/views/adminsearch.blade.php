@extends('main')

@section('content')
    <p class="title text-center">Панель администратора</p>

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
                        @foreach($search as $two)
                            <tr class="admin_table_row">
                                <td><img data-fancybox alt="" class="admin_table_image" src="{{Storage::URL($two->image)}}"></td>
                                <td><p class="product_name descr">{{$two['name']}}</p></td>
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
                                    <a  class="btn btn-danger admin_btn" href="/home/delproduct/{{$two->id}}">Удалить</a>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>

                    </div>
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
