<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryFormAddRequest;
use App\Services\FormService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct(protected FormService $formService)
    {
    }

    public function enquiry_form(InquiryFormAddRequest $request)
    {
        $data = $request->validated();
        return $this->formService->submit_inquiry_form($data);
    }
}
