<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = ['name', 'model', 'cc', 'color_id', 'weight', 'price', 'img_path'];
    protected $hidden = ['id'];


    public function color()
    {
        return $this->belongsTo('App\Color');
    }
}
