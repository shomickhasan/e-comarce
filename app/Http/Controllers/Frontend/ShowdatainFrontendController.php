<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Categories\Categories;
use App\Models\Backend\Products\Products;

class ShowdatainFrontendController extends Controller
{
    public function Showdata(){
        $categories = Categories::all();
        $products= Products::all();
        return view('frontend.index',compact('categories','products'));
    }
    public function products($id){
        $categories = Categories::all();
        $products= Products::where('cat_id',$id)->get();
        return view('frontend.pages.categorywiseproducts',compact('products','categories'));
    }
    public function userlogin(){
        $categories = Categories::all();
        return view('auth.frontend.userlogin',compact('categories'));
    }
}
