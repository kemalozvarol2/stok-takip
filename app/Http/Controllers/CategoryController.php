<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show_category($id)
    {
        $selected_category = new Category();
        $selected_category = $selected_category->whereId($id)->first();
        $selected_products = new Product();
        $selected_products = $selected_products->whereCategoryId($id)->get()->all();
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        return view('show_category',compact(['selected_category','selected_products','cat_data']));
    }
    public function create()
    {
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        return view('create_category',compact('cat_data'));
    }
    public function create_category(Request $request)
    {
        $cat_data = new Category();
        $cat_data->name = $request['category_name'];
        $cat_data->save();
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        return view('create_category',compact('cat_data'));
    }
    public function delete_category($id)
    {
        $category = new Category();
        $category->whereId($id)->first()->delete();
        $product = new Product();
        $product->where('category_id', $id)->delete();
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        return back();
    }
}
