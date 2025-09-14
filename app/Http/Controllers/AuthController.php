<?php

namespace App\Http\Controllers;

use App\Http\Requests\auth\RegisterRequest;
use App\Http\Requests\auth\LoginRequest;
use App\Mail\WelcomUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginForm()
    {
       return view('auth.login');
    }
    public function registerForm()
    {
       return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $data = $request->validated();
        $user = User::create($data);
        if ($user)
        {
            Auth::login($user);
            Mail::to($user['email'])->send(new WelcomUser(Auth::user(),$request->password));
            return redirect()->back()->with('success','ثبت نام شما با موفقیت انجام شد. یک ایمیل حاوی اطلاعات لاگین به ایمیلتان ارسال گردید  ');
        }else{
            return redirect()->back()->with('failed','ثبت نام با مشکل مواجه شد لطفا دوباره تلاش کنید ');
        }
    }

    public function login(LoginRequest $request)
    {
        // $data = $request->validated();
        // $user = User::where('email',$data['email'])->first();
        // if($user){
        //     dd($user);
        // }else{
        //     return back()->withErrors('چنین کاربری وجود ندارد');
        // }
        $data = $request->validated();
        dd($data);
    }
}
