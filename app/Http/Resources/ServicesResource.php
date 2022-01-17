<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'video' => $this->video,
            'category_id' =>$this->category_id,
            'category_name' => $this->category->name,
            'variations' => ServiceVariationsResource::collection( $this->whenLoaded('variations') ),
        ];
    }
}
