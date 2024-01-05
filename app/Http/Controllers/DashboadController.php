<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Item;
use App\Models\Stock;
use App\Models\Vendor;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function dashboard()
    {
        $total_category = Category::count();
        $total_quantity = Stock::count();
        $total_vendor = Vendor::count();
        $total_employee = Employee::count();
        $total_asset = Item::count();
        return view("backend.layouts.pages.dashboard",
        compact('total_category','total_quantity','total_vendor','total_employee','total_asset'));
    }
}
