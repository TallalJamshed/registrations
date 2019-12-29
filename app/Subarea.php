<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    protected $table = "subareas";
    protected $primaryKey = "subarea_id";
    protected $fillable = [
        'subarea_name','fk_area_id'
    ];
}
