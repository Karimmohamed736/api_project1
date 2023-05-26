<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Train_No'=> $this->id,
            'user_Id'=>$this->user_Id,
            'Offday'=>$this->Offday,
            'Departure_station'=>$this->Departure_station,
            'Departure_time'=>$this->Departure_time,
            'Arrival_station'=>$this->Arrival_station,
            'Arrival_time'=>$this->Arrival_time,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,

        ];

    }
}
