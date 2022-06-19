@extends('backend.mastertemplating.mastertemplate')

@section('content')
   <!-- ########## START: MAIN PANEL ########## -->
   
   <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>ADD Category</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base"><!-- start main contant -->
                {{-- category added form --}}
                <form action="{{Route('myproductadd')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">
                            <div class="form-group">
                                <label for="cat_id">Category Name</label>
                                <select name="cat_id" id="cat_id" class="form-control">    
                                    <option value="">--select category---</option>
                                     @foreach($categories as $category) 
                                    <option value="{{ $category->id }}" >{{ $category->name}}</option>
                                     @endforeach 
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="vendor_id">Vendor Id</label>
                                <input type="text" class="form-control" id="vendor_id" name="vendor_id" placeholder="Enter your Vendor id" value="{{old('vendor_id')}}"/>
                                @error('vendor_id') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_code">Product Code</label>
                                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter your Vendor id" value="{{old('product_code')}}"/>
                                @error('product_code') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product Price</label>
                                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter your Vendor id" value="{{old('product_price')}}"/>
                                @error('product_price') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="discount_price">Discount Price</label>
                                <input type="text" class="form-control" id="discount_price" name="discount_price" placeholder="Enter your " value="{{old('discount_price')}}"/>
                                @error('discount_price') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="short_desc">Short Drescreption</label>
                                <textarea name="short_desc" id="short_desc" cols="30" rows="5" class="form-control" placeholder="Enter Category Product Short Drescreption">{{old('short_desc')}}</textarea>
                                @error('short_desc') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="thumbnails">Thambnel</label>
                                <input type="file" class="form-control" id="thumbnails" name="thumbnails" value="{{old('thumbnails')}}"/>
                                 @error('thumbnails') 
                                  <span class="text-danger">{{$message}}</span>
                                 @enderror
                            </div>
                    </div>
                    {{-- leftcol --}}
                    <div class="col-md-6">  
                        <div class="form-group">
                            <label for="name">Sub-Category Name</label>
                            <select name="subcat_id" id="subcat_id" class="form-control">    
                                 <option value="">--select Subcategory---</option>
                                 @foreach($subcategories as $subcategory) 
                                <option value="{{ $subcategory->id }}" >{{ $subcategory->name}}</option> 
                                 @endforeach 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter your Product Name" value="{{old('product_name')}}"/>
                            @error('product_name') 
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter your Product Name" value="{{old('discount')}}"/>
                            @error('vendor_id') 
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter your Product Name" value="{{old('quantity')}}"/>
                            @error('vendor_id') 
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="long_desc">Long Drescreption</label>
                            <textarea name="long_desc" id="long_desc" cols="30" rows="5" class="form-control" placeholder="Enter Category Product Short Drescreption">{{old('long_desc')}}</textarea>
                            @error('long_desc') 
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label id="pname">Status</label>
                            <select name="status" id="" class="form-control">
                              <option value="1">---Statu---</option>
                              <option value="1">Active</option>
                              <option value="0">In Active</option>  
                            </select>
                            @error('status') 
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="galary">Product Galaries</label>
                            <input type="file" class="form-control" id="galary" name="galary[]" value="{{old('galary')}}" multiple>
                             @error('galary') 
                              <span class="text-danger">{{$message}}</span>
                             @enderror
                        </div>
                        
                       
                        <div class="form-group">
                            <label id=""></label>
                          <input type="submit" class="form-control btn btn-primary" value="Save"/>
                        </div>
                      </div>
                      
                    </div>
                  </form>
                    
            </div><!-- end main contant -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
  {{-- -----------------------------------footer.blade.php---------------------- --}}
       @include('backend.includes.footer')
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
