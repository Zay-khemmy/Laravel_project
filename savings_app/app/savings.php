<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class savings extends Model
{
    protected $fillable = [
        'name', 'target_amount', 'balance', 'brief_description'
    ];

}
