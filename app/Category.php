<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subcategory()
    {
        return $this->hasMany(Post::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
