<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryFormAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tour_name' => ['nullable'],
            'tour_slug' => ['nullable'],
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'date_of_travel' => ['required'],
            'number_of_people' => ['required'],
            'remarks' => ['nullable']
        ];
    }
}
