<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function list()
    {   
        $items=Item::with('category')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.layouts.pages.items.list',compact("items"));
    }
    public function create()
    {
        $categories=Category::all();
        return view("backend.layouts.pages.items.create",compact("categories"));
    }
    public function store(Request $request)
    {
       
        $validate=Validator::make($request->all(),[
            "name"          =>"required |unique:Items,name,string,id",
            "category_id"   =>"required",
            "description"   =>"required",
            "image"         =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        if($request->has('image')){

            $imageName = time().'.'.$request->image->extension();  
             
            $request->image->move(public_path('uploads/items'), $imageName);
        }

       Item::create([
        "name"          =>$request->name,
        "category_id"   =>$request->category_id,
        "description"   =>$request->description,
        "image"         =>$imageName
       ]);
       
       toastr()->success("Item has been successfully created.");
       return redirect()->route("item.list");

    }
    public function view($id)
    {
        $item=Item::find($id);
        return view("backend.layouts.pages.items.view",compact("item"));
    }
    public function edit(Request $request, $id)
    {   
        $item=Item::find($id);
        $categories=Category::all();
        return view("backend.layouts.pages.items.edit",compact("item","categories"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "name"          =>"required |unique:Items,name,string,id",
            "category_id"   =>"required",
            "description"   =>"required",
            "image"         =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        if($request->has('image')){

            $imageName = time().'.'.$request->image->extension();  
             
            $request->image->move(public_path('uploads/items'), $imageName);
        }
        $item=Item::find($id);
        $item->update([
        "name"          =>$request->name,
        "category_id"   =>$request->category_id,
        "description"   =>$request->description,
        "image"         =>$imageName
       ]);
       
       toastr()->success("Item has been successfully updated.");
       return redirect()->route("item.list");

    
    }
    public function delete($id)
    {
        Item::destroy($id);
        toastr()->success("Item has been successfully deleted.");
       return redirect()->back();

    }
}
