<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumniPayment extends Model
{
    //
    protected $fillable = [
        'fullname', 'amount', 'reg_no','paid'
    ];
    
}
