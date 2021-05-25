@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
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
            <div class="col-8 content">
                <h1>Kategori Oluştur</h1>
                <form action="{{route('create_category')}}" method="POST">
                    @csrf
                    <input type="text" placeholder="Kategori Adı" class="form-control mt-4" name="category_name">
                    <input type="submit" class="btn btn-success mt-4 float-right" value="Kategori Oluştur">
                </form>
            </div>
        </div>
    </div>
@endsection
