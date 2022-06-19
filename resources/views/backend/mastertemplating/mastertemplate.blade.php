
<!DOCTYPE html>
<html lang="en">
  <head>
      {{-- -------------------head.blade.php---------- --}}
      @include('backend.includes.head')

      {{-- -----------------------css.blade.php---------------- --}}
      @include('backend.includes.css')
    
  </head>

  <body>

  {{-- -------------------------------leftbar.blade.php-------------- --}}
     @include('backend.includes.leftbar')

  {{-- -----------------------------headpanal.blade.php-------------------------------}}
     @include('backend.includes.headpanal')

   {{-- ---------------------------------rightbar.blade.php------------------------------- --}}
    @include('backend.includes.rightbar')

   
    <div class="br-mainpanel">
     @yield('content')
    </div>

   {{-- -------------------------------------------script.blade.php-------------------------- --}}
          @include('backend.includes.script')
  </body>
</html>
