<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TransformResource;
use App\Http\Resources\TransformCriteriaResource;
use App\Http\Resources\CriteriaResource;
use App\Http\Resources\TypeCriteriaResource;


class TypeResource extends JsonResource
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
          'name' => $this->name,
          'description' => $this->description,
          'type_criteria' => TypeCriteriaResource::collection($this->type_criteria),
          //'criteria' => $this->criteria,

          //'transforms' => TransformResource::collection($this->transforms)
        ];
    }
}
