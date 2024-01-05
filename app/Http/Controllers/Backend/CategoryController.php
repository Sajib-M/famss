<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function list()
    {   
        $categories=Category::orderBy('id', 'DESC')->Paginate(6);
        return view('backend.layouts.pages.categories.list',compact("categories"));
    }
    public function create()
    {
        return view("backend.layouts.pages.categories.create");
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "name"  =>"required |unique:categories,name,string,id",
            "description"  =>"required",
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       Category::create([
        "name"          =>$request->name,
        "description"   =>$request->description,
        "status"   =>$request->status,
       ]);
       
       toastr()->success("Category has been successfully created.");
       return redirect()->route("category.list");

    }
    public function view($id)
    {
        $category=Category::find($id);
        return view("backend.layouts.pages.categories.view",compact("category"));
    }
    public function edit(Request $request, $id)
    {   
        $category=Category::find($id);
        return view("backend.layouts.pages.categories.edit",compact("category"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "name"  =>"required",
            "description"  =>"required",
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $category=Category::find($id);
        $category->update([
        "name"          =>$request->name,
        "description"   =>$request->description,
        "status"        =>$request->status,
       ]);
       
       toastr()->success("Category has been successfully updated.");
       return redirect()->route("category.list");

    }

    public function delete($id)
    {
        Category::destroy($id);
        toastr()->success("Category has been successfully deleted.");
       return redirect()->back();

    }
}
