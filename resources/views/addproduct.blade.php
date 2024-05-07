@extends('main')
@section('content')
<p class="title text-center">Добавление товара</p>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 card rounded addform">
            <form action="/saveproduct" enctype="multipart/form-data" method="POST" class="m-5 ">
                <label for="image" class="mt-3">Изображение</label>
                <input type="file" required for="image" name="image" class="form-control mt-1 text-center">
                <label for="name" class=" mt-3">Введите название</label>
                <input type="text" required for="name" name="name" placeholder = "Название" class="form-control mt-1">
                <label for="price" class=" mt-3">Введите цену</label>
                <input type="text" required for="price" name="price" placeholder = "Цена" class="form-control mt-1">
                <label for="description" class=" mt-3">Введите описание</label>
                <textarea type="text" required for="description" name="description" placeholder="Описание" class="form-control mt-1"></textarea>
                <label for="category" class=" mt-3">Выберите категорию</label>
                <select  for="category"  name="category_id" id="" class="form-control mt-1">

                    @foreach($category as $one)

                        <option @if($one->category_id ==0 ) style="font-weight: bold; background-color: #e5e5e5" @endif value="{{$one->id}}">{{$one->name}}</option>
                    @endforeach
                @csrf
                </select>
                <label for="unit" class=" mt-3">Выберите единицу</label>
                <select for="unit"  name="unit_id" id="" class="form-control mt-1">
                    @foreach($unit as $one)
                        <option value="{{$one->id}}">{{$one->name}}</option>
                    @endforeach

                </select>
                <label for="art" class=" mt-3">Введите артикул</label>
                <input for="art" required type="text" name="art" placeholder = "Артикул" class="form-control mt-1">
                <p class="mt-3">
                    <label for="sale" class="  ">Акция</label>
                    <input type="hidden" name="sale" value="0">
                    <input type="checkbox"  for="sale" name="sale" value="1" class=" form-check-input ">
                </p>
                <button type="submit class=" class="btn btn-success mt-3 col-12">Добавить товар</button>
                @csrf </form>
        </div>
    </div>
    <style>
        .form-check-input{
            height: 20px;
            width: 20px;
        }
        option{
            font-size: 18px;
        }
    .addform{
        margin: 30px 0 60px 0;
    }
    </style>
@endsection
