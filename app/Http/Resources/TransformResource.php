<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\TypeResource;
use App\Http\Resources\TransformCriteriaResource;
use App\Http\Resources\CriteriaResource;


class TransformResource extends JsonResource
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
          'type' =>new TypeResource($this->type),
          'review' => ReviewResource::collection($this->reviews),
        ];
    }
}
