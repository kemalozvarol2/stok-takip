@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 sidebar">
                <ul class="list-group">
                    <li class="list-group-item active">Kategoriler</li>
                    @if(count($cat_data) > 0)
                        @foreach($cat_data as $cat)
                            <li class="list-group-item">
                                <a href="/category/{{$cat->id}}">{{$cat->name}}</a>
                                <a href="/delete/category/{{$cat->id}}" class="text-danger float-right">Sil</a>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item">Kategori Yok</li>
                    @endif
                    <li class="list-group-item"><a href="{{route('create_category')}}">+ Kategori Ekle</a></li>
                </ul>
            </div>
            <div class="col-8">
                <h1>Gösterilen kategori : {{$selected_category->name}}</h1>
                <a href="/product/add/{{$selected_category->id}}" class="btn btn-lg btn-success my-4 float-right">{{$selected_category->name}} Kategorisine Ürün Ekle</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Stok Adedi</th>
                        <th scope="col">Alış Fiyatı</th>
                        <th scope="col">Satış Fiyatı</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($selected_products) > 0)
                        @foreach($selected_products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->stock}}</td>
                                <td>{{$product->price_buying}}</td>
                                <td>{{$product->price_selling}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th scope="row">0</th>
                            <td>Bu Kategoride Henüz Kayıt Yok</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
