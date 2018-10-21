<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id'];

    public function tranforms()
    {
      return $this->hasMany('App\Tranform');
    }

    public function criterias()
    {

      return $this->hasManyThrough('App\Criteria');
    }

    public function type_criteria()
    {
      return $this->hasMany('App\TypeCriteria');
    }
}
