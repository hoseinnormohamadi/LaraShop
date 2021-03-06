<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EpisodeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        $this->collection->map(function ($item){
              return[
                 'title' => $item->title,
                 'body' => $item->body,
                 'Episode_numer' => $item->number,
                  'Course' => $item->course_id
              ] ;
            })
        ];
    }
}
