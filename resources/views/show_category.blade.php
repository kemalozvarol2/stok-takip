@extends('layouts.app')

@section('content')
                <h1>Gösterilen kategori : {{$selected_category->name}}</h1>
                <a href="/product/add/{{$selected_category->id}}" class="btn btn-lg btn-success my-4 float-right">{{$selected_category->name}} Kategorisine Ürün Ekle</a>
                <table class="table table-striped table-dark">
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

                            <tr @if($product->stock < $product->critical_stock_level) class="text-danger" @endif>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->stock}}
                                    <br>
                                    @if($product->stock < $product->critical_stock_level)
                                        Kritik Stok Seviyesi : {{$product->critical_stock_level}} !
                                    @endif

                                </td>
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
@endsection
