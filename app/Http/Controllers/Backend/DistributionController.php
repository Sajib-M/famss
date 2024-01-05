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
        $distributes=Distribute::with(['employee','stock'])->orderBy('id','desc')->get();
        return view('backend.layouts.pages.distributes.list',compact("distributes"));
    }
    public function create()
    {
        $employees =Employee::all();
        $stocks      =Stock::all();
        return view("backend.layouts.pages.distributes.create",compact("employees","stocks"));
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "employee_id"           =>"required|exists:employees,id",
            "stock_id"               =>"required |exists:stocks,id",
            "quantity_distributed"  =>"required|numeric|min:1",
            "date_distributed"      =>"required|date",
            "damage"                =>"required|numeric|min:0",
            "note"                  =>"required|string",

        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

     

      $updateStock      = Stock::find($request->stock_id);
       $newPrice        = $updateStock->price;
       $currentStock    = $updateStock->quantity;

       
            $newQuantity =$currentStock - $request->quantity_distributed;
        
            if($newQuantity < $currentStock)
            {
               
                $updateStock->update([
                  'quantity' =>$newQuantity,
                  'sub_total'=>$newPrice * $newQuantity,
                ]);

                Distribute::create([
                    "employee_id"           =>$request->employee_id,
                    "stock_id"              =>$request->stock_id,
                    "quantity_distributed"  =>$request->quantity_distributed,
                    "date_distributed"      =>$request->date_distributed,
                    "damage"                =>$request->damage,
                    "note"                  =>$request->note,
                   
                   ]);
                   
                   toastr()->success("Distribute has been successfully created.");
                   return redirect()->route('distribute.list');


            }else{
                
                toastr()->warning('Out of Stock, Please check the stock!');
                return redirect()->back();

            }  
        

    }
    public function view($id)
    {
        $distribute=distribute::find($id);
        return view("backend.layouts.pages.distributes.view",compact("distribute"));
    }
    public function edit(Request $request, $id)
    {   
        $distribute    =Distribute::find($id);
        $employees     =Employee::all();
        $stocks         =Stock::all();
        return view("backend.layouts.pages.distributes.edit",compact("distribute","stocks","employees"));
    }
    public function update(Request $request,$id)
    {
        $distribute= Distribute::find($id);
        $validate=Validator::make($request->all(),[
            "employee_id"           =>"required|exists:employees,id",
            "stock_id"               =>"required |exists:stocks,id",
            "quantity_distributed"  =>"required|numeric|min:1",
            "date_distributed"      =>"required|date",
            "damage"                =>"required|numeric|min:0",
            "note"                  =>"required|string",

        ]);

        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       $distribute->update([
        "employee_id"           =>$request->employee_id,
        "stock_id"               =>$request->stock_id,
        "quantity_distributed"  =>$request->quantity_distributed,
        "date_distributed"      =>$request->date_distributed,
        "damage"                =>$request->damage,
        "note"                  =>$request->note,
       
       ]);
       
       toastr()->success("Distribute has been successfully updated.");
       return redirect()->route("distribute.list");

    }

    public function delete($id)
    {
        Distribute::destroy($id);
        toastr()->success("Distribute has been successfully deleted.");
        return redirect()->back();

    } 
}
