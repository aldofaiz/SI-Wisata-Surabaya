<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'location_category_id' => $this->location_category_id,
            'location_name' => $this->location_name,
            'location_address' => $this->location_address,
            'description' => $this->description,
            'banner' => $this->banner,
            'image' => ImagesResource::collection($this->getMedia('image')),
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
