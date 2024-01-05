<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getFullNameAttribute()
    {
        return $this->first_name . " ".$this->last_name;
    }


    public function distributions()
    {
        return $this->hasMany(Distribute::class);
    }
}
