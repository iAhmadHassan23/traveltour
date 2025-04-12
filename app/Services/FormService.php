<?php

namespace App\Services;

use App\Mail\ContactMail;
use App\Mail\InsuranceMail;
use App\Mail\QouteMail;
use App\Mail\SignatureMail;
use App\Models\Form;
use App\Models\FormData;
use Exception;
use Illuminate\Support\Facades\Mail;

class FormService {
    public function submit_inquiry_form(array|object $data): mixed
    {
        try {
            if (isset($data['g-recaptcha-response'])) {
                unset($data['g-recaptcha-response']);
            }
            $form = Form::create([
                'form_type' => 'signature_form',
                'page' => null,
            ]);

            foreach ($data as $key => $value) {
                FormData::create([
                    'form_id' => $form->id,
                    'field_name' => $key,
                    'field_value' => $value,
                ]);
            }
            // Mail::to('hassaankh321@gmail.com')->send(new SignatureMail($data));
            // return redirect('/thank-you');
            return redirect()->back()->with('success', 'Form submitted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
}