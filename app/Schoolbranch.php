<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolbranch extends Model
{
    protected $table = "schoolbranches";
    protected $primaryKey = "sc_br_id";
    protected $fillable = [
        'sc_br_name','fk_school_id','fk_subarea_id','latitude','longitude','location_string'
    ];
}
