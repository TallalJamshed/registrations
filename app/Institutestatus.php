<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institutestatus extends Model
{
    protected $table = "institutestatus";
    protected $primaryKey = "status_id";
    protected $fillable = [
        'status_name'
    ];
}
