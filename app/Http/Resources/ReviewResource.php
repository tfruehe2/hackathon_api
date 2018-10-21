<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
          "comment" => $this->comment,
          "transform" => new TransformResource($this->transform),
          "review_criteria" => ReviewCriteriaResource::collection($this->review_criteria)
        ];
    }
}
