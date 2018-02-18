<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{


    public function motorcycles()
    {
        return $this->hasMany('App\Motorcycle');
    }
}
