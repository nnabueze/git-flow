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

    //capitalizing the Name attribute
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    //capitalizing the surname attribute
    public function setSurnameAttribute($value)
    {
        $this->attributes['surname'] = ucwords($value);
    }

    //capitalizing the Name attribute
    public function setCompanyNameAttribute($value)
    {
        $this->attributes['name_company'] = ucwords($value);
    }
}
