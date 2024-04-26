<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(){
         $user = Socialite::driver('facebook')->stateless()->user();

        $userModel = User::where('email', $user->getEmail())->first();

        if(!$userModel){
            $userModel = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
            ]);
        }

        auth()->login($userModel);
        return view('customerViews.customerInfo', ['name' => $userModel->name, 'email' => $userModel->email]);
    }
}
