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
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
