<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource {

    public function toArray( $request ) {
        return ( [
            'id' => $this->id,
            'title' => $this->title,
            'image' => $this->image,
            'description' => $this->description,
            'date' => $this->date,
            'time' => $this->time,
        ] );
    }
}
