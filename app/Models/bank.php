<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    
    public function Branches()
    {
        return $this -> hasMany(Branch::class,'bankid','id');
    }


}
