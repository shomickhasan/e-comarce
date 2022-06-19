<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Subcategories\Subcategories;
use App\Models\Backend\Categories\Categories;
use App\Models\Backend\Products\Products;
use App\Models\Backend\Galary\Galsry;
use Image;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        $subcategories =Subcategories::all();
        return view('backend/pages/product/addproduct',compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products= Products::all();
        return view('backend/pages/product/manageproduct',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $product = new Products();
         $product->vendor_id = $request->vendor_id;
         $product->cat_id = $request->cat_id;
         $product->subcat_id = $request->subcat_id;
         $product->product_name = $request->product_name;
         $product->slug = Str::slug($request->product_name);
         $product->product_code = $request->product_code;
         $product->product_price = $request->product_price;
         $product->discount = $request->discount;
         $product->discount_price = $request->discount_price;
         $product->short_desc = $request->short_desc;
         $product->long_desc = $request->long_desc;
         $product->quantity = $request->quantity;
         $product->status = $request->status;
         
         if($request->thumbnails){
          $image = $request->file('thumbnails');
          $imageCustomeName = rand();
          $location =public_path('backend/img/Products/'.$imageCustomeName);
          Image::make( $image)->resize(1100, 1100)->encode('jpg')->save($location);
          $product->thumbnails= $imageCustomeName;
          $product->save();
         }

         if($request->galary){
             $galaries = $request->file('galary');
             foreach( $galaries as $galary){
                $galaryimageCustomName=  rand().'.'.$galary->getClientOriginalExtension();
                $galarylocation =public_path('backend/img/Products/galary/'.$galaryimageCustomName);
                Image::make($galary)->save($galarylocation);
                $galary = new Galsry();
                $galary->images= $galaryimageCustomName;
                $galary->product_code = $request->product_code;
                $galary->save();
             }
         }

          

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //category depandable selection
    public function subcategoryselect(Request $request){
        $data = Subcategories::select('subcat_id')->where('subcat_id', $request->cat_id)->get();
        return response()->json([
            'data'=> $data,
        ]);
    }
}
