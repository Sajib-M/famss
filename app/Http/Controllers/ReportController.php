<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function Report()
    {
        return view('backend.layouts.pages.report');
    }
    public function  ReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;
       
        
        $stockReport=Stock::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);
        
        return view('backend.layouts.pages.report',compact('stockReport'));
    }
}
