@extends('frontend.mastertemplate.template')
@section('main')
<main class="main">
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <img class="border-radius-15" src="{{asset('frontend')}}/assets/imgs/page/login-1.png" alt="">
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h1 class="mb-5">Login</h1>
                                        <p class="mb-30">Don't have an account? <a href="page-register.html">Create here</a></p>
                                    </div>

                                    
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <x-label for="email" :value="__('Email')" /><x-label for="email" :value="__('Email')" />
                                            <x-input id="email"  type="email" name="email" :value="old('email')" required autofocus placeholder="Username or Email *" />
                                        </div>
                                        <div class="form-group">
                                            <x-label for="password" :value="__('Password')" />
                                            <x-input id="password"  type="password" name="password" required autocomplete="current-password"  placeholder="Your password *" />
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <input type="text"  name="" placeholder="Security code *">
                                            </div>
                                            <span class="security-code">
                                                <b class="text-new">8</b>
                                                <b class="text-hot">6</b>
                                                <b class="text-sale">7</b>
                                                <b class="text-best">5</b>
                                            </span>
                                        </div>
                                        <div class="login_footer form-group mb-50">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me" value="">
                                                    <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Log in</button>
                                        </div>
                                        {{-- social login --}}
                                        <div class="form-group">
                                            <a href="{{Route('loginwithgoogle')}}" class="form-control btn  text-info  border border-primary"><span>Login With Google</span><i class="fa-fa-google"></i></a>
                                        </div>
                                        <div class="form-group">
                                            <a href="{{Route('loginwithfacebook')}}" class="form-control btn  text-info  border border-primary"><span>Login facebook</span><i class="fa-fa-google"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</main>

@endsection
