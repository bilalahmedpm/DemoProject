<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    
    public function Banks()
    {
        return $this->belongsTo(Bank::class , 'bankid' ,'id');
    }
}
