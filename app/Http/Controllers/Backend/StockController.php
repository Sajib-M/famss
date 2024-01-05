<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Stock;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{
    public function list()
    {   
        $stocks=Stock::with(['category','item'])->orderBy('id', 'DESC')->paginate(5);
        return view('backend.layouts.pages.stocks.list',compact("stocks"));
    }
    public function create()
    {
        $categories =Category::all();
        $items      =Item::all();
        return view("backend.layouts.pages.stocks.create",compact("categories","items"));
    }
    public function store(Request $request)
    {
       
        $validate=Validator::make($request->all(),[
            "category_id"   =>"required",
            "item_id"       =>"required",
            "quantity"      =>"required|numeric|min:0",
            "price"         =>"required|numeric|min:0",
            "warannty"      =>"required|date",
            "service"       =>"required|date",
            
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
       Stock::create([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "sub_total"     =>$request->price * $request->quantity,
        "warranty"       =>$request->warannty,
        "service_date"   =>$request->service,

       
       ]);
       
       toastr()->success("Stock has been successfully created.");
       return redirect()->route("stock.list");

    }
    public function view($id)
    {
        $stock=Stock::find($id);
        return view("backend.layouts.pages.stocks.view",compact("stock"));
    }
    public function edit(Request $request, $id)
    {   
        $stock      =Stock::find($id);
        $categories =Category::all();
        $items      =Item::all();

        return view("backend.layouts.pages.stocks.edit",compact("stock","items","categories"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "category_id"   =>"required",
            "item_id"       =>"required",
            "quantity"      =>"required|numeric|min:0",
            "price"         =>"required|numeric|min:0",
            "warannty"      =>"required|date",
            "service"       =>"required|date",
            
        ]);
        if($validate->fails())
        {
            
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $stock=Stock::find($id);
        $stock->update([
        "category_id"   =>$request->category_id,
        "item_id"       =>$request->item_id,
        "quantity"      =>$request->quantity,
        "price"         =>$request->price,
        "sub_total"     =>$request->price * $request->quantity,
        "warranty"      =>$request->warannty,
        "service_date"  =>$request->service,
       
       ]);
       
       toastr()->success("Stock has been successfully created.");
       return redirect()->route("stock.list");

    }

  /*   public function delete($id)
    {
        Stock::destroy($id);
        toastr()->success("Stock has been successfully deleted.");
        return redirect()->back();

    } */
}


