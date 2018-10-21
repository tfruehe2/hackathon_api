<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCriteria extends Model
{
    protected $guarded = ['id'];


    public function criteria()
    {
      return $this->belongsTo('App\Criteria');
    }

    public function type()
    {
      return $this->belongsTo('App\Type');
    }
}
