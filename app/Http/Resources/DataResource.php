<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "page_uid" => $this->page_uid,
            "fields" => $this->fields,
            "created" => $this->created_at->format('d-m-Y H:i'),
        ];
    }
}
