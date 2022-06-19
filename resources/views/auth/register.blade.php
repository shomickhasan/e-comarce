
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin Regestration</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Admin <span class="tx-info">Regestration</span> <span class="tx-normal"></span></div>
        <div class="tx-center mg-b-40">Create Backend User Heare</div>
   
         <!-- Validation Errors -->
         <x-auth-validation-errors class="mb-4" :errors="$errors" />

         <form method="POST" action="{{ route('register') }}">
            @csrf
         
            <div  class="form-group">
                <x-label for="username" :value="__('userName')" />
                <x-input id="username" class="form-control" type="text" name="username" :value="old('username')" required autofocus placeholder="Enter your username"/>
            </div>
          
          <!-- Name -->
          <div  class="form-group">
            <x-label for="name" :value="__('Nname')" />
            <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter your Full Name" />
          </div>

          <!-- Email Address -->
          <div class="form-group">
            <x-label for="email" :value="__('Email')" />
            <x-input placeholder="Enter your Email" id="email" class="form-control" type="email" name="email" :value="old('email')" required />
          </div>
          <!-- Email Address -->
          <div class="form-group">
            <x-label for="email" :value="__('Role')" />
            <select name="role" id="role" class="form-control" required>
                <option value="0">----Select User Role----</option>
                <option value="1">Admin</option>
                <option value="2">Vendor</option>
                <option value="3">User</option>
            </select>
          </div>

           <!-- Password -->
           <div class="form-group">
            <x-label for="password" :value="__('Password')" />
            <x-input placeholder="Enter your password" id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
           </div>

           <!-- Confirm Password -->
           <div class="form-group">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-input placeholder="Enter your Confirm password" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
           </div>
    
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        <div class="mg-t-40 tx-center">if you have already regester? <a href="{{ route('login') }}" class="tx-info">login</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>

