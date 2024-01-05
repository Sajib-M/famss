<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Purchaes_detail;
use App\Models\Purchase;
use App\Models\Stock;
use App\Models\Vendor;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public function list()
    {   
        $purchases=Purchase::with(['category','item','vendor'])->orderBy('id', 'DESC')->get();

        return view('backend.layouts.pages.purchases.list',compact("purchases"));
    }
    public function create()
    {
        $categories =Category::all();
        $items      =Item::all();
        $vendors    =Vendor::all();

        return view("backend.layouts.pages.purchases.create",
        compact("categories","items","vendors"));
    }
   
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "category_id"   =>"required",
            "item_id"       =>"required",
            "vendor_id"       =>"required",
            "quantity"      =>"required",
            "price"         =>"required",
            "warannty"      =>"required",
            "service"       =>"required",
            
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }  

        //purchase 
       Purchase::create([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "vendor_id"     =>$request->vendor_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "warranty"      =>$request->warannty,
        "service_date"  =>$request->service,
        // "added_by"      =>auth()->user()->name

       
       ]);

       //purchase_details
       Purchaes_detail::create([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "vendor_id"     =>$request->vendor_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "sub_total"     =>$request->quantity * $request->quantity,
        "warranty"      =>$request->warannty,
        "service_date"  =>$request->service,
        "added_by"      =>auth()->user()->name

       
       ]);

        //stock
       Stock::create([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "sub_total"     =>$request->price * $request->quantity,
        "warranty"       =>$request->warannty,
        "service_date"   =>$request->service,

       
       ]);
       
       toastr()->success("purchase has been successfully created.");
       return redirect()->route("purchase.list");

    }
    public function view($id)
    {
        $purchase=Purchase::find($id);
        return view("backend.layouts.pages.purchases.view",compact("purchase"));
    }
    public function edit(Request $request, $id)
    {   
        $purchase   =purchase::find($id);
        $categories =Category::all();
        $items      =Item::all();
        $vendors    =Vendor::all();

        return view("backend.layouts.pages.purchases.edit",
                    compact("purchase","items","categories"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "category_id"   =>"required",
            "item_id"       =>"required",
            "vendor_id"     =>"required",
            "quantity"      =>"required",
            "price"         =>"required",
            "warannty"      =>"required",
            "service"       =>"required",
            
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $purchase=Purchase::find($id);
        $purchase->update([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "vendor_id"      =>$request->vendor_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "warranty"      =>$request->warannty,
        "service_date"  =>$request->service,
        // "added_by"      =>auth()->user()->name
       
       ]);
       
       toastr()->success("purchase has been successfully created.");
       return redirect()->route("purchase.list");

    }

    public function delete($id)
    {
        Purchase::destroy($id);
        toastr()->success("purchase has been successfully deleted.");
        return redirect()->back();

    }
}
