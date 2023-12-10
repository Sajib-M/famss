<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id", "id");
    }

    public function item()
    {
        return $this->belongsTo(Item::class,"item_id", "id");
    }
}
