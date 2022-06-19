<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Addtocart;
use App\Models\Backend\Categories\Categories;
use App\Models\Backend\Products\Products;
use Cart;

class AddtoCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('frontend.pages.viewcart',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
       $pid = $request->pid;
       $Product = Products::find($pid);
       $cart =Cart::add(array(
            'id' =>  $Product->id,
            'name' => $Product->product_name,
            'price' =>$Product->discount_price,
            'quantity' =>$request->quantity,
            'attributes' => array(
                'thumbnails'=> $Product->thumbnails,
            )
        ));
        $products = Cart::getContent();
        foreach($products as $product){
            $cartstore = new Addtocart;
            //$cartstore->user_id= '';
            $cartstore->product_id= $product->id;
            $cartstore->product_name= $product->name;
            $cartstore->price= $product->price;
            $cartstore->quantity= $product->quantity;
            $cartstore->image= $product->attributes->thumbnails;
            $cartstore->save();
        }

    
       return back();
       
        //manually ajax cart
        /*$addtocart = new Addtocart();
        $addtocart->user_id = $request->user_id;
        $addtocart->product_name = $request->product_name;
        $addtocart->price = $request->product_price;
        $addtocart->quantity = $request->product_quantity;
        $addtocart->image = $request->product_image;
        $addtocart->product_id = $request->product_id;
        $addtocart->save();
        return response()->json([
            'status'=>'Cart added successfully',
        ]);*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //manually ajax cart show
        /*$addtocart = Addtocart::where('user_id',$id)->get();
        return response()->json([
           
             'data'=> $addtocart,
        ]);*/
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
        Cart::update( $id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
          ));
          return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
       
       
        // manually ajax cart delete
        /*$addtocart = Addtocart::find($id);
        $addtocart->delete();
        return response()-json([
            'status'=>'success',
        ]);*/
    }
}
