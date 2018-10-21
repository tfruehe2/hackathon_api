<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transform extends Model
{
    protected $guarded = ['id'];

    public function type()
    {
      return $this->belongsTo('App\Type');
    }


    public function reviews()
    {
      return $this->hasMany('App\Review');
    }
}
