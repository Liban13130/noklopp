<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal',
        'price_goal',
        'price_pack',
        'consumption',
        'price_goal_now',
        'user_id',
        'transaction_id',
        'cracking_id',
    ];

    public function user() 
    { 
        return $this->belongsTo(User::class,'user_id','id'); 
    }
    public function transaction() 
    { 
        return $this->belongsTo(Transaction::class,'project_id','id'); 
    }
    public function Cracking() 
    { 
        return $this->belongsTo(Cracking::class,'cracking_id','id'); 
    }
}
