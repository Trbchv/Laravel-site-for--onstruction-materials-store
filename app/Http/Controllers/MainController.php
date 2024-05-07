<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainpage()
    {
        $slides =Slide::get();
        $data['slides'] = $slides;
        $products = Product::orderBy('id','desc')->Paginate(8);
        $data['products'] = $products;
        return view('index',$data);
    }
    public function paginate()
    {
        $paginate = Product::orderBy('id','desc')->Paginate(8);
        $data['paginate'] = $paginate;
        return view('paginate',$data);
    }
    public function search(Request $r){
        $data = [];
        $search = Product::where('name', 'LIKE', '%'.$r->t.'%')->get();
        $data['search'] = $search;
        return view('search', $data);
    }
    public function category($id){
        $category = Category::find($id);
        $data['category'] = $category;
        $products = Product:: whereIn('category_id',$category->subcategory()->select('id'))->get();
        $data['products'] = $products;
        $subcategory = Category::find($id);
        $data['subcategory'] = $subcategory;
        return view('category', $data);
    }
    public function subcategory($id){
        $subcategory = Category::find($id);
        $data['subcategory'] = $subcategory;
        return view('subcategory',$data);
    }
    public function product($id){
        $product = Product::find($id);
        $data['product'] = $product;
        return view('product',$data);
    }
    public function privacy(){

        return view('privacy');
    }

}
