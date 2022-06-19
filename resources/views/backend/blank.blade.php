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
                <h1> main Contant start heare</h1>
                    
            </div><!-- end main contant -->
        </div><!-- row -->
    </div><!-- br-pagebody -->
  {{-- -----------------------------------footer.blade.php---------------------- --}}
       @include('backend.includes.footer')
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
