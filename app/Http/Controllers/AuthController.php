<?php

namespace App\Http\Controllers;

use App\Http\Requests\auth\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(AuthRequest $request){
        $data = $request->validated();
        $user = User::create($data);
        Auth::login($user);
        return redirect()->route('front.index')->with('successLogin', $user->name.'عزیز خوش آمدی ' );
    }
}
