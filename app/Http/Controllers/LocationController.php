<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Location;
use Alert;

class LocationController extends Controller
{
    public function show(){
        if(Auth::user()->type=='A'){
            return view('admin.addLocation');
        }else{
            return view('welcome');
        }
    }

    public function store(Request $request){
        if(Auth::user()->type=='A'){
            $rules = [
                'location' => 'required|string'
            ];

            $request->validate($rules);

            $location = new Location;
            $location->name = $request->location;
            $location->save();

            Alert::success('Successfully Location Added')->autoclose(3000);;

            return redirect()->back();
        }
    }
}
