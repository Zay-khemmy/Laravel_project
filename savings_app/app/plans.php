<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'end_date', 'target_amount', 'balance', 'brief_desc'
    ];
}
