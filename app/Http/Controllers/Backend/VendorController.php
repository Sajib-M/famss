<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    public function list()
    {   
        $vendors=Vendor::orderBy('id', 'DESC')->Paginate(6);
        return view('backend.layouts.pages.vendors.list',compact("vendors"));
    }
    public function create()
    {
        return view("backend.layouts.pages.vendors.create");
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            "first_name"    =>"required",
            "last_name"     =>"required",
            "email"         =>"required |unique:vendors,email,email,id",
            "gender"        =>"required",
            "phone"         =>"required",
            "address"       =>"required",

        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
       
      

       vendor::create([
            "first_name"    =>$request->first_name,
            "last_name"     =>$request->last_name,
            "email"         =>$request->email,
            "gender"        =>$request->gender,
            "phone"         =>$request->phone,
            "address"       =>$request->address,
          
       ]);
       
       toastr()->success("vendor has been successfully created.");
       return redirect()->route("vendor.list");

    }
    public function view($id)
    {
        $vendor=Vendor::find($id);
        return view("backend.layouts.pages.vendors.view",compact("vendor"));
    }
    public function edit(Request $request, $id)
    {   
        $vendor=Vendor::find($id);
        return view("backend.layouts.pages.vendors.edit",compact("vendor"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "first_name"    =>"required",
            "last_name"     =>"required",
            "email"         =>"required |unique:vendors,email,email,id",
            "gender"        =>"required ",
            "phone"         =>"required",
            "address"       =>"required",
            
        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

        $vendor=vendor::find($id);
        $vendor->update([
            "first_name"    =>$request->first_name,
            "last_name"     =>$request->last_name,
            "email"         =>$request->email,
            "gender"        =>$request->gender,
            "phone"         =>$request->phone,
            "address"       =>$request->address,

       ]);
       
       toastr()->success("vendor has been successfully updated.");
       return redirect()->route("vendor.list");
    }

    public function delete($id)
    {
        Vendor::destroy($id);
        toastr()->success("vendor has been successfully deleted.");
       return redirect()->back();

    }
}
