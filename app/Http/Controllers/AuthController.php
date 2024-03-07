<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
// use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

// use Illuminate\Support\Facades\Str;

// use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
   public function login(){
    // dd(FacadesHash::make('krishna1234'));
     if(!empty(Auth::check())){
        if(Auth::user()->user_type == 1)
        {
            return redirect('/admin');

        }elseif(Auth::user()->user_type == 2)
        {
            return redirect('/teacher');

        }elseif(Auth::user()->user_type == 3)
        {
            return redirect('/student');

        }elseif(Auth::user()->user_type == 4)
        {
            return redirect('/parent');
        }
     }
     return view('auth.login');
       // return redirect('/admin');
   }

   public function AuthLogin(Request $req){
    // dd($req->all());
    // $remember = !empty($req->remember) ? true : false;
    // $password =  bcrypt($req->password);
    // // dd($req->email, $req->password, $req->remember);
    // dd($req->email, $password, $req->remember);
    // exit;
    $remember = !empty($req->remember)? true : false;
    if(Auth::attempt(['email' => $req->email,'password' => $req->password],$remember
    )){
        if(Auth::user()->user_type == 1)
        {
            return redirect('/admin');

        }else if(Auth::user()->user_type == 2)
        {
            return redirect('/teacher');

        }else if(Auth::user()->user_type == 3)
        {
            return redirect('/student');

        }else if(Auth::user()->user_type == 4)
        {
            return redirect('/parent');

        }
        

    }else{
        return redirect()->back()->with('error','Please enter correct email and password');
    }

   }

   public function forget_password(){
        return view('auth.forget');
   }

   public function forget(Request $req){
        // dd($req->all());
        $user = User::getEmailSingle($req->email);
        // dd($getEmailSingle);
        if(!empty($user)){
            $user->remember_token =Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgetPasswordMail($user));

            return redirect()->back()->with('success','Please check your email and reset your password');
        }else{
            return redirect()->back()->with('error','Email is not found');
        }
   }

   public function logout(){
    Auth::logout();
    return redirect('');
   }


}
