<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Message extends Model
{
    protected $table = 'messages';

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }

    protected $fillable = [
        'name',
        'message',
        'post_id'
    ];

    public function getPublished(){
        return $this->orderBy('id','desc')->paginate(2);
    }

}
