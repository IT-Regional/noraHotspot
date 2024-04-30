<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function viewUsers(){
        return view('adminViews.adminSistemUsers');
    }

    public function activeUsers(){
        return view('adminViews.adminActiveUsers');
    }

    public function login(){
        return view('customerViews.customerLogin');
    }
}
