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
    <div class="message">

    </div>
    <div class="row row-sm mg-t-20">
        <div class="col-lg-12">
            <div class="card bd-0 shadow-base"><!-- start main contant -->
                <div class="row">
                    <div class="col-md-12 justify-content-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addcupon"><i class="fas fa-plus"></i>Add Cupon</button>
                    </div>
                    <!-- Modal for add cupon -->
                        <div class="modal fade mt-5" id="addcupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add you Cupon/Promocode Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="cuponcode">Cupon Code</label>
                                        <input type="text" class="form-control" id="cuponcode"  placeholder="Enter Cupon Code">
                                        <span class="text-danger cuponcodeError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount Percentage</label>
                                        <input type="text" class="form-control" id="discount"  placeholder="Enter Discount Percentage">
                                        <span class="text-danger discountError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="dic_price">Discount Price</label>
                                        <input type="text" class="form-control" id="dic_price"  placeholder="Enter Discount Price">
                                        <span class="text-danger dis_proceError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="start">Start Date</label>
                                        <input type="date" class="form-control" id="start"  placeholder="Enter Discount Price">
                                        <span class="text-danger startDateError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="end">End Date</label>
                                        <input type="date" class="form-control" id="end"  placeholder="Enter Discount Price">
                                        <span class="text-danger endDateError"></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary addcupon">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div><!-- End Modal -->
                    <div class="table ml-5 p-5">
                        <table>
                            <thead>
                                <tr>
                                    <th>Cupon Code</th>
                                    <th>Discount</th>
                                    <th>Discount_amount</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="cupon_tbl">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                    
            </div><!-- end main contant -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
  {{-- -----------------------------------footer.blade.php---------------------- --}}
       @include('backend.includes.footer')
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
