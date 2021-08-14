<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{   
    // for dashbord
    public function index(){
        return view('admin.dashbord');
    }
    // for insert Products
    public function insertProduct(Request $r){
        if($r->method()=="POST"){
            $validateData = $r->validate([
                'p_title'=> 'required',
                'brand'=> 'required',
                'price'=> 'required',
                'discount_price'=> 'required',
                'description'=> 'required',
                'image'=> 'required',
                'category_id'=> 'required',
            ]);

            // $filename = $r->image->getClientOriginalName();
            // $r->image -> move(public_path('photos'),$filename);
            $p = new Product();
            $p->p_title = $r->p_title;
            $p->brand = $r->brand;
            $p->price = $r->price;
            $p->discount_price = $r->discount_price;
            $p->description = $r->description;
            $p->category_id = $r->category_id;
            $p->image = $r->image;
            $p->save();
            
            return redirect()->back();
        }
        return view('admin.insertProduct',["categories"=>Category::all()]);
        
    }
    //delete product
    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    // delete category 
    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
    // for insert Category
    public function insertCategory(Request $c){
        if($c->method()=="POST"){
            $validateD = $c->validate([
                'title'=> 'required'
            ]);
            Category::create($validateD);
            return redirect()->back();
        }
        return view('admin.categories',["categories"=>Category::all()]);
    }
    //for calling category
    public function category(){
        return view('admin.categories',["categories"=>Category::all()]);
    }
    //for calling products
    public function product(){
        return view("admin.products",["products"=>Product::all()]);
    }
    // for order
    public function orders(){

    }
    // for address
    public function address(){

    }
    // for coupons
    public function coupon(){

    }
    // for users
    public function users(){

    }
}
