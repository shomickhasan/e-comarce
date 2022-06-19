<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\Cupon;

class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.cupon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cupon = Cupon::all();
        if($cupon){
            return response()->json([
                'data' => $cupon,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all() ,[
            'cuponcode'=> 'required',
            'discount'=> 'required',
            'dic_price'=> 'required',
            'start'=> 'required',
            'end'=> 'required',

    ]);

        if($validator->fails()){
           return response()->json([
            'status'=>'400',
            'message'=>  $validator->messages(),
           ]); 
        }

        else{
            $addcupon = new Cupon();
            $addcupon->cupon_code = $request->cuponcode;
            $addcupon->discount = $request->discount;
            $addcupon->discount_amount = $request->dic_price;
            $addcupon->start_at = $request->start;
            $addcupon->end_at = $request->end;
            $addcupon->save();
            return response()->json([
                'message'=>'cupon added succesfully',
            ]);
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
        $cupon = Cupon::find($id);
        $cupon->delete();
        if($cupon){
            return response()->json([
                'message'=> "Cupon Delete Successfully",
            ]);
        }
    }
}
