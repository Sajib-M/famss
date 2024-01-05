<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribute extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, "employee_id", "id");
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class, "stock_id", "id");
    }
    

    
}
