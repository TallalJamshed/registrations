<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolbranch extends Model
{
    protected $table = "schoolbranches";
    protected $primaryKey = "sc_br_id";
    protected $fillable = [
        'sc_br_name','fk_school_id','sc_br_address','sc_br_status','no_of_boys','no_of_girls','sc_br_covered_area','no_of_teachers','owner_name','owner_phone','owner_email','principal_name','principal_email','principal_phone','fk_subarea_id','latitude','longitude','location_string'
    ];
}
