<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    public function transform()
    {
      return $this->belongsTo('App\Transform');
    }

    public function review_criteria()
    {
      return $this->hasMany('App\ReviewCriteria');
    }
}
