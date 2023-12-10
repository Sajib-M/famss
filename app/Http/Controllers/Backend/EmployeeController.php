<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function list()
    {   
        $employees=Employee::orderBy('id', 'DESC')->Paginate(6);
        return view('backend.layouts.pages.employees.list',compact("employees"));
    }
    public function create()
    {
        return view("backend.layouts.pages.employees.create");
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            "first_name"    =>"required",
            "last_name"     =>"required",
            "email"         =>"required",
            "gender"        =>"required",
            "salary"        =>"required",
            "DOB"           =>"required",
            "phone"         =>"required",
            "address"       =>"required",
            "join_date"     =>"required",
            "age"           =>"required",
            "image"         =>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $imageName=$request->image;
        if($request->has('image')){

            $imageName = time().'.'.$request->image->extension();  
             
            $request->image->move(public_path('uploads/employees'), $imageName);
        }

       Employee::create([
            "first_name"    =>$request->first_name,
            "last_name"     =>$request->last_name,
            "email"         =>$request->email,
            "gender"        =>$request->gender,
            "salary"        =>$request->salary,
            "date_of_birth" =>$request->DOB,
            "phone"         =>$request->phone,
            "address"       =>$request->address,
            "join_date"     =>$request->join_date,
            "age"           =>$request->age,
            "image"         =>$imageName
       ]);
       
       toastr()->success("Employee has been successfully created.");
       return redirect()->route("employee.list");

    }
    public function view($id)
    {
        $employee=Employee::find($id);
        return view("backend.layouts.pages.employees.view",compact("employee"));
    }
    public function edit(Request $request, $id)
    {   
        $employee=Employee::find($id);
        return view("backend.layouts.pages.employees.edit",compact("employee"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "first_name"    =>"required",
            "last_name"     =>"required",
            "email"         =>"required",
            "gender"        =>"required",
            "salary"        =>"required",
            "DOB"           =>"required",
            "phone"         =>"required",
            "address"       =>"required",
            "join_date"     =>"required",
            "age"           =>"required",
            "image"         =>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

        if($request->has('image')){

            $imageName = time().'.'.$request->image->extension();  
             
            $request->image->move(public_path('uploads/employees'), $imageName);
        }
        $employee=Employee::find($id);
        $employee->update([
            "first_name"    =>$request->first_name,
            "last_name"     =>$request->last_name,
            "email"         =>$request->email,
            "gender"        =>$request->gender,
            "salary"        =>$request->salary,
            "date_of_birth" =>$request->DOB,
            "phone"         =>$request->phone,
            "address"       =>$request->address,
            "join_date"     =>$request->join_date,
            "age"           =>$request->age,
            "image"         =>$imageName
       ]);
       
       toastr()->success("Employee has been successfully updated.");
       return redirect()->route("employee.list");
    }

    public function delete($id)
    {
        Employee::destroy($id);
        toastr()->success("employee has been successfully deleted.");
       return redirect()->back();

    }
}
