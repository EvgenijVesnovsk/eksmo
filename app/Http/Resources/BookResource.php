<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status->name,
            'created_at' => $this->created_at->format('d.m.Y'),
            'updated_at' => $this->created_at->format('d.m.Y'),
        ];
    }
}
