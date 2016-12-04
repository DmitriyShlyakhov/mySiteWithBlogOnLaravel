<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'id',
        'active',
        'title',
        'slug',
        'image',
        'body'
    ];

    public function message()
    {
        return $this->belongsTo('App\Message');
    }

    public function getActive()
    {
        return $this->published()->latest()->paginate(3);
    }

    public function getBySlug($slug)
    {
        return $this->where(['slug' => $slug])->FirstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => 1]);
    }
}
