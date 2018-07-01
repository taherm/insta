<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
