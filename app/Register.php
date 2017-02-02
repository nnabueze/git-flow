<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $fillable = [
        'name',
         'surname', 
         'key_id', 
         'phone',
         'address',
         'gender',
         'name_company',
         'position',
         'company_phone',
         'office_email',
    ];
}
