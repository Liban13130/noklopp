<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = [
        'number_phone',
        'lastname',
        'firstname',
        'user_id',
    ];

    public function user() 
    { 
        return $this->belongsTo(User::class,'user_id','id'); 
    }
}


