<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TypeResource;
use App\Http\Resources\CriteriaResource;

class TypeCriteriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          "type" => $this->type_id,
          "criteria" => new CriteriaResource($this->criteria)
        ];
    }
}
