<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvocationPayment extends Model
{
    //
    protected $fillable = [
        'fullname', 'amount', 'reg_no','paid'
    ];
}
