<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function category()
    {
        return $this->BelongsTo(Category::class, 'category_id', "id");
    }

    public function distributions()
    {
        return $this->hasMany(Distribute::class);
    }
}
