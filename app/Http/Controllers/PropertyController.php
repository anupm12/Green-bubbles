<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Properties;
use Alert;
use App\Location;
use Illuminate\Support\Facades\DB;
use Storage;

class PropertyController extends Controller
{
    public function addproperty(){
        $location = Location::all();
        if(Auth::user()->type=="A"){
            return view('admin.addProperties',compact('location'));
        }else{
            return view('welcome');
        }
    }

    public function view(){

        if(Auth::user()->type=="A"){
            $properties = Properties::all();
            return view('admin.viewProperties',compact('properties'));
        }else{
            return view('welcome');
        }
    }

    public function edit($id){
        if(Auth::user()->type=="A"){
            $property = Properties::find($id);
            $location = Location::all();
            return view('admin.editProperty')->with(['property'=>$property,'location'=>$location]);
        }else {
            return view('welcome');
        }
    }

    public function update(Request $request,$id){
        if(Auth::user()->type=="A"){
            $property = Properties::find($id);{
                if($request->hasFile('image')){

                    //get image file.
                    $image = $request->image;
                    //get just extension.
                    $ext = $image->getClientOriginalExtension();
                    //make a unique name
                    $filename = uniqid().'.'.$ext;
                    //upload the image
                    $image->storeAs('public/properties',$filename);
                    //delete the previous image.
                    Storage::delete("public/properties/{$property->image}");
                    //this column has a default value so don't need to set it empty.
                    $property->image = $filename;

                }

                    $property->name = $request->name;
                    $property->capacity = $request->capacity;
                    $property->type = $request->type;
                    $property->location = $request->location;
                    $property->address = $request->address;

                    $property->save();

                    Alert::success('Successfully Property Updated')->autoclose(3000);;

                    return redirect()->back();
            }
        }
    }

    public function delete($id){
        if(Auth::user()->type=="A"){
            $property = Properties::find($id);
            Storage::delete("public/properties/{$property->image}");
            DB::table('properties')->where('id','=',$id)->delete();

            Alert::success('Successfully Property Deleted')->autoclose(3000);;
            return redirect()->back();
        }
    }

    public function store(Request $request){
if(Auth::user()->type=="A"){
    $rules = [
        'name'     => 'required|string|min:3|max:191',
        'type'    => 'required',
        'address' => 'required',
        'capacity' => 'required|numeric',
        'image'    => 'nullable|image|max:1999', //formats: jpeg, png, bmp, gif, svg
    ];

    $request->validate($rules);

    $properties = new Properties();

    if($request->hasFile('image')){

        //get image file.
        $image = $request->image;
        //get just extension.
        $ext = $image->getClientOriginalExtension();
        //make a unique name
        $filename = uniqid().'.'.$ext;
        //upload the image
        $image->storeAs('public/properties',$filename);
        //delete the previous image.
        // Storage::delete("public/stroage/properties/{$properties->image}");
        //this column has a default value so don't need to set it empty.
        $properties->image = $filename;
        $properties->name = $request->name;
        $properties->capacity = $request->capacity;
        $properties->type = $request->type;
        $properties->location = $request->location;
        $properties->address = $request->address;

        $properties->save();

        Alert::success('Successfully Property Added')->autoclose(3000);;

        return redirect()->back();
    }

    }
    }

}
