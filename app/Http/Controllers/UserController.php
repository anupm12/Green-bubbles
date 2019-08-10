<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard(){
        if(Auth::user()->type=='A'){
            return view('admin.dashboard');
        }else {
            return view('welcome');
        }
    }
}
