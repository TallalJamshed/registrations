<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    protected $primaryKey = "city_id";
    protected $fillable = [
        'city_name','fk_province_id'
    ];
}
