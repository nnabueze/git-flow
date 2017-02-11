<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
         'surname', 
         'key_id', 
         'phone',
         'email',
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
}
