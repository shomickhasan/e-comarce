<?php

namespace App\Http\Controllers\Backend\Subcategories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Subcategories\Subcategories;
use App\Models\Backend\Categories\Categories;
use Illuminate\Support\Str;
use Image;
use File;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Categories::all();
       return view('backend.pages.subcategory.addsubcategory',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategories::all();
        $categories = Categories::all();
        return view('backend.pages.subcategory.managesubcategory',compact('subcategories','categories'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory= new Subcategories();
        $subcategory->cat_id = $request->cat_id;
        $subcategory->name = $request-> name;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->status = $request-> status;

        $image = $request->file('pic');
        $imageCustomeName = rand().'.'.$image->getClientOriginalExtension();
        $location =public_path('backend/img/subcategories/'.$imageCustomeName);
        Image::make( $image)->save($location);
        $subcategory->pic= $imageCustomeName;
        $subcategory->save();
        return redirect()->route('subcategory.manage');

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
}
