<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class Emails extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    { 
//        $Subject = $this->subject;
        return [
            'ID'      => $this->uid,
            'Date'    => date('D, d M Y H:i', strtotime($this->date)),
            'Subject' => (isset($this->subject)) ? $this->subject : "(no subject)",
            'Seen'    => $this->seen,
        ];
    }
}
