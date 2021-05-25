<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create($id)
    {
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        $selected_category = new Category();
        $selected_category = $selected_category->whereId($id)->first();
        return view('create_product',compact(['cat_data','selected_category']));
    }
    public function create_product(Request $request, $id)
    {
        $product = new Product();
        $product->category_id = $id;
        $product->name = $request['name'];
        $product->stock = $request['stock'];
        $product->barcode = $request['barcode'];
        $product->price_buying = $request['price_buying'];
        $product->price_selling = $request['price_selling'];
        $product->critical_stock_level = $request['critical_stock_level'];
        $product->save();
        $cat_data = new Category();
        $cat_data = $cat_data->all();
        $selected_category = new Category();
        $selected_category = $selected_category->whereId($id)->first();
        $success = $request['name'];
        return view('create_product',compact(['cat_data','selected_category','success']));
    }
    /*
     * @todo : ürün silmeyi ekle (tablodan)
     * @todo : kategori silinirken emin misin diye sorsun, bide kategori silinirken ürünlerini de silsin
     *
     * */
}
