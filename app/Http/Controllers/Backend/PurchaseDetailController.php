<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Purchaes_detail;
use Illuminate\Http\Request;

class PurchaseDetailController extends Controller
{
    public function list()
    {   
        $purchases=Purchaes_detail::with(['category','item','vendor'])->orderBy('id', 'DESC')->get();

        return view('backend.layouts.pages.purchases.purchase_details',compact("purchases"));
    }
}
