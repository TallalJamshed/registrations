<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table="roles";
    protected $primaryKey="role_id";
    protected $fillable=[
        'role_name'
    ];
}
