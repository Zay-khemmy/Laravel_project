<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funds extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'amount'
    ];
}
