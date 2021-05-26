@extends('layouts.app')
@section('content')
                @if(isset($success))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Başarılı!</strong> {{$success}} kaydı {{$selected_category->name}} kategorisine eklendi.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <h1 class="pb-3 ml-2 mt-2">{{$selected_category->name}} kategorisine ürün ekle</h1>
                <form action="{{route('create_product',$selected_category->id)}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center justify-content-center my-4">
                        <input type="text" placeholder="Ürün Adı" class="form-control w-50 mx-2" name="name" autocomplete="off">
                        <input type="number" placeholder="Stok Miktarı" name="stock" class="form-control w-50 mx-2">
                    </div>
                    <div class="d-flex mb-4">
                        <input type="text" placeholder="Barkod" name="barcode" class="form-control mx-2">
                    </div>
                    <div class="d-flex align-items-center justify-content-center my-4">
                        <input type="number" placeholder="Alış Fiyatı" name="price_buying" class="form-control mx-2">
                        <input type="number" placeholder="Satış Fiyatı" name="price_selling" class="form-control mx-2">
                    </div>
                    <div class="d-flex">
                        <input type="number" placeholder="Kritik Stok Miktarı" name="critical_stock_level" class="form-control mx-2"">
                        <input type="submit" class="btn btn-success mx-2" value="Kategori Oluştur">
                    </div>
                </form>
@endsection
