<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use  App\Providers\RouteServiceProvider;

class SocialloginControler extends Controller
{   //login with googge
    public function loginwithgoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function logininfostore(){
        $googleUser = Socialite::driver('google')->stateless()->user();
        //dd( $googleUser);
        $googleuserFind = User::where('socialid',$googleUser->id)->first();
        if($googleuserFind){
            Auth::login($googleuserFind);
            return redirect()->route('home');
        }
        else{
            $userinsert = new User();
            $userinsert->name = $googleUser->name;
            $userinsert->user_name = $googleUser->name.$googleUser->id;
            $userinsert->role = '3';
            $userinsert->socialid = $googleUser->id;
            $userinsert->email = $googleUser->email;
            $userinsert->password = Hash::make( $googleUser->id);
            $userinsert->save();
            return redirect()->route('home');
            //return redirect()->intended(RouteServiceProvider::HOME);

        }
    }

    public function gotofacebook(){
        return Socialite::driver('facebook')->redirect();
        $facebookuser = Socialite::driver('facebook')->user();
        dd( $facebookuser);
        //$facebookuserfiend = User::where('socialid',$googleUser->id)->first();
    }
}
