<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $table = "news_events";
    protected $primaryKey = "msg_id";
    protected $fillable = [
        'msg_title','newsevent_message','status','type','thumbnail_string'
    ];
}
