<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Distribute;
use App\Models\Employee;
use App\Models\Item;
use App\Models\Stock;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DistributionController extends Controller
{
    public function list()
    {   
        $distributes=Distribute::with(['employee','asset'])->get();
        return view('backend.layouts.pages.distributes.list',compact("distributes"));
    }
    public function create()
    {
        $employees =Employee::all();
        $items      =Item::all();
        return view("backend.layouts.pages.distributes.create",compact("employees","items"));
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "employee_id"   =>"required",
            "item_id"       =>"required",
            "quantity"      =>"required",
            "damage"        =>"required",
            "note"          =>"required",

        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       distribute::create([
        "employee_id"   =>$request->employee_id,
        "item_id"       =>$request->item_id,
        "quantity"      =>$request->quantity,
        "damage"        =>$request->damage,
        "note"          =>$request->note,
       
       ]);

      /*  $updateStock=Stock::all();
    //    dd($updateStock);
       foreach($updateStock as $stock)
       {
           if($stock->item_id == $request->item_id)
           {
               // dd('exit');
               if($stock->quantity >=1)
               {
                   $newStock= $stock->quantity-$request->quantity;
                   // dd($newStock);
                  Stock::update([
                    'quantity'=>$newStock,
                ]);
               } 
               dd('not available');
            }
            dd('invalid assted');
        } */
       
       toastr()->success("distribute has been successfully created.");
       return redirect()->route("distribute.list");

    }
    public function view($id)
    {
        $distribute=distribute::find($id);
        return view("backend.layouts.pages.distributes.view",compact("distribute"));
    }
    public function edit(Request $request, $id)
    {   
        $distribute    =Distribute::find($id);
        $employees    =Employee::all();
        $items         =Item::all();

        return view("backend.layouts.pages.distributes.edit",compact("distribute","items","employees"));
    }
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            "employee_id"   =>"required",
            "item_id"       =>"required",
            "quantity"      =>"required",
            "damage"        =>"required",
            "note"          =>"required",

        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }
        $distribute=Distribute::find($id);
        $distribute->update([
        "employee_id"   =>$request->employee_id,
        "item_id"       =>$request->item_id,
        "quantity"      =>$request->quantity,
        "damage"        =>$request->damage,
        "note"          =>$request->note,
       
       ]);
       
       toastr()->success("distribute has been successfully updated.");
       return redirect()->route("distribute.list");

    }

    public function delete($id)
    {
        distribute::destroy($id);
        toastr()->success("distribute has been successfully deleted.");
        return redirect()->back();

    }
}
