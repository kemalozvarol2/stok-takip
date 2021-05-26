@extends('layouts.app')
@section('content')
    @if(isset($products))
        @foreach($products as $product)

            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Stok Adedi</th>
                    <th scope="col">Alış Fiyatı</th>
                    <th scope="col">Satış Fiyatı</th>
                    <th scope="col">Kritik Stok Seviyesi</th>
                    <th scope="col" class="text-center">Kaydı Sil</th>
                </tr>
                </thead>
                <tbody>
                @if(count($products) > 0)
                    @foreach($products as $product)

                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{\App\Category::whereId($product->id)->first()->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->price_buying}}</td>
                            <td>{{$product->price_selling}}</td>
                            <td>{{$product->critical_stock_level}}</td>
                            <td class="text-center"><a href="/delete/product/{{$product->id}}" class="btn btn-danger" onclick="return confirm('Kaydı silmek istediğinizden emin misiniz?')">Sil</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th scope="row">0</th>
                        <td>Bu Kategoride Henüz Kayıt Yok</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>
        @endforeach
    @endif
@endsection
