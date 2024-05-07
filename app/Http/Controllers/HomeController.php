<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides =Slide::get();
        $data['slide'] = $slides;
        $products = Product::orderBy('id','desc')->get();
        $data['products'] = $products;
        return view('home',$data);
    }
    public function saveslide(Request $r){
        $t = new Slide();
        $t->image = $r->file('image')->store('public/slide_image');
        $t->save();
        return redirect('home');
    }
    public function addproduct(){
        $data = [];
        $product = Product::get();
        $category = Category::get();
        $unit = Unit::get();
        $data['product'] = $product;
        $data['category'] = $category;
        $data['unit'] = $unit;
        return view('addproduct', $data);
    }
    public function saveproduct(Request $r){
        $t = new Product();
        $t->name = $r->name;
        $t->price = $r->price;
        $t->description = $r->description;
        $t->image = $r->file('image')->store('public/product_image');
        $t->category_id = $r->category_id;
        $t->unit_id = $r->unit_id;
        $t->art = $r->art;
        $t->sale = $r->sale;
        $t->save();
        return redirect('home');
    }
    public function editproduct($id){
        $data = [];
        $product = Product::find($id);
        $category = Category::get();
        $unit = Unit::get();
        $data['product'] = $product;
        $data['category'] = $category;
        $data['unit'] = $unit;
        return view('editproduct', $data);
    }
    public function saveedit(Request $r){
        $t = Product::find($r->id);
        $t->name = $r->name;
        $t->price = $r->price;
        $t->description = $r->description;
        if(!empty($r->file('img'))){
            $t->image = $r->file('image')->store('public/product_image');
        }
        $t->category_id = $r->category_id;
        $t->unit_id = $r->unit_id;
        $t->art = $r->art;
        $t->sale = $r->sale;

        $t->save();
        return redirect('home');
    }
    public function delslide($id){
        $d = Slide::find($id);
        $d -> delete();
        return redirect('home');
    }
    public function delproduct($id){
        $d = Product::find($id);
        $d -> delete();
        return redirect('home');
    }
    public function adminsearch(Request $r){
        $data = [];
        $search = Product::where('name', 'LIKE', '%'.$r->t.'%')->get();
        $data['search'] = $search;
        return view('adminsearch', $data);
    }
}
