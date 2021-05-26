@extends('layouts.app')
@section('content')
                <h1>Kategori Oluştur</h1>
                <form action="{{route('create_category')}}" method="POST">
                    @csrf
                    <input type="text" placeholder="Kategori Adı" class="form-control mt-4" name="category_name">
                    <input type="submit" class="btn btn-success mt-4 float-right" value="Kategori Oluştur">
                </form>
@endsection
