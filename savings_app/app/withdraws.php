<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdraws extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'amount', 'reason_for_withdraw'
    ];
}
