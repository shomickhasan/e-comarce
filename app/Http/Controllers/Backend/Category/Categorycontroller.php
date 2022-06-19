<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Categories\Categories;
use Illuminate\Support\Str;
use Image;
use File;


class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.categories.addcategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backend.pages.categories.managecategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //category store
        //      $request->validate([
        //      'name'=> 'required',
        //      'description'=> 'required| min:10|max:50',
        //      'pic'=> 'required',
        //      'status'=> 'required',
        //   ]);
         
          $category = new Categories();
          $category->name = $request->name;
          $category->slug =Str::slug($request->name);
          $category->description = $request->description;
          $category->status = $request->status;
          //dd($category);

          $image = $request->file('pic');
          $imageCustomeName = rand();
          $location =public_path('backend/img/categories/'.$imageCustomeName);
          Image::make( $image)->resize(120, 120)->encode('png')->save($location);
          $category->pic= $imageCustomeName;
          $category->save();
          
         return redirect()->route('category.manage');


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
        // category edit
        $categories = Categories::find($id);
        return view('backend.pages.categories.editcategory',compact('categories'));
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
        $category = Categories::find($id);
        $category->name = $request->name;
        $category->slug =Str::slug($request->name);
        $category->description = $request->description;
        $category->status = $request->status;
        if(!empty($request->pic)){
            File::exists('backeend/subcategoryImage/'. $category->pic);
            File::delete('backeend/subcategoryImage/'. $category->pic);
            $image = $request->file('pic');
            $imageCustomeName = rand().'.'.$image->getClientOriginalExtension();
            $location =public_path('backend/img/categories/'.$imageCustomeName);
            Image::make( $image)->save($location);
            $category->pic= $imageCustomeName;
        }
        $category->update();
        return redirect()->route('category.manage');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //category delete
        $categories= Categories::find($id);
        if(File::exists('backend/img/categories/'.$categories->pic)){
            File::delete('backend/img/categories/'.$categories->pic);
        } 
        $categories->delete();
        return back();

    }
}
