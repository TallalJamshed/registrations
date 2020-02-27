<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $primaryKey = 'district_id';
    protected $fillables = [
        'district_name' , 'province_name'
    ];
}
