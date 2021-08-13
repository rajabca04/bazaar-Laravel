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
                'category_id'=> 'required'
                
                
            ]);
            Product::create($validateData);
            return redirect()->back();
        }
        return view('admin.insertProduct',["categories"=>category::all()]);
    }
    // for insert Category
    public function insertCategory(){

    }
    //for calling category
    public function category(Request $c){
        if($c->method()=="POST"){
            $validateData = $c->validate([
                'p_title'=> 'required',
                'brand'=> 'required',
                
                
            ]);
            Category::create($validateData);
            return redirect()->back();
        }

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
