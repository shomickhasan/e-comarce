@extends('backend.mastertemplating.mastertemplate')

@section('content')
   <!-- ########## START: MAIN PANEL ########## -->
   
   <div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Dashboard</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base"><!-- start main contant -->
                <table class="table">
                    <thead>
                      <tr>
                        <th> #SL</th>
                        <th> Category Name</th>
                        <th>Sub-Category Name</th>
                        <th> Image</th>
                        <th> Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $sl=1; @endphp
                      @foreach($subcategories as $subcategory)
                        <tr>
                          <td>{{$sl++}}</td>
                          <td> {{$subcategory->categories->name}}</td>
                          <td>{{$subcategory->name}}</td>
                          <td><img  height="80" src="{{ asset('backend/img/subcategories/'.$subcategory->pic) }}"></td>
                          <td>@if($subcategory->status=="1")
                                    <span class="badge badge-info">Active</span>
                                @else 
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                          
                          
                         
                           <td>
                               <a href="" class=" btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

                              <button type="button" id="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{$subcategory->id}}">
                                 <i class="fas fa-trash-alt"></i>
                              </button>
                          </td>
                         
                        </tr>
                       <!-- Modal for delete Product -->
                     <div class="modal fade" id="delete{{$subcategory->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Please confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h6>Are you Want to Delete &nbsp;<span class="badge badge-warning text-capitilize text-light">{{$subcategory->name}} Category</span><h6>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">No</button>
                            <a href="" class="btn btn-sm btn-danger">Ok</a>
                          </div>
                        </div>
                      </div>
                    </div> 
                          

                      @endforeach
                    </tbody>
                  </table>
                    
            </div><!-- end main contant -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
  {{-- -----------------------------------footer.blade.php---------------------- --}}
       @include('backend.includes.footer')
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
