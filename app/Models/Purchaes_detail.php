<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaes_detail extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
