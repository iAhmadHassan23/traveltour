<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EmailFoldersCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Name'        => $this->name,
            'FullName'    => $this->full_name,
            'UnseenCount' => $this->query()->unseen()->count(),
            'Children'    => EmailFoldersCollection::collection($this->children)
        ];
    }
}
