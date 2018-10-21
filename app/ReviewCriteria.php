<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewCriteria extends Model
{
    protected $guarded = ['id'];

    public function review()
    {
      return $this->belongsTo('App\Review');
    }

    public function criteria()
    {
      return $this->belongsTo('App\Criteria');
    }
}
