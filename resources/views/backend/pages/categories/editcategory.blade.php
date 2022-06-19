@extends('backend.mastertemplating.mastertemplate')

@section('content')
   <!-- ########## START: MAIN PANEL ########## -->
   
   <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update Category</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base"><!-- start main contant -->
                {{-- category added form --}}
                <form action="{{Route('category.update',$categories->id)}} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-5">
                      <div class="col-md-6">

                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Categiry Name" value="{{$categories->name}}"/>
                                @error('name') 
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                        <div class="form-group">
                          <label for="description">Category Drescreption</label>
                          <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Enter Category Drescreption">{{$categories->description}}</textarea>
                          @error('description') 
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        - <img height="120"src="{{asset('backend/img/categories/'.$categories->pic)}}" alt="category img">
                        <div class="form-group">
                          <label for="pic">Category image</label>
                          <input type="file" class="form-control" id="pic" name="pic" value="{{old('pic')}}"/>
                           @error('pic') 
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                        </div>

                        <div class="form-group">
                            <label id="pname">Status</label>d
                            <select name="status" id="" class="form-control">
                              <option value="1">---Statu---</option>
                               <option value="1"@if($categories->Status==1) selected @endif>Active</option>
                              <option value="0" @if($categories->Status==0) selected @endif>In Active</option> 
                            </select>
                            @error('status') 
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" id="productQuantity" name="productQuantity" value="Update"/>
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
