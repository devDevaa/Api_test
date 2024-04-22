<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'attributes' => [
                'event_name' => $this->event_name,
                'event_slug' => $this->event_slug,
                'event_description' => $this->event_description,
                'event_date' => $this->event_date,
            ]
        ];
    }
}
