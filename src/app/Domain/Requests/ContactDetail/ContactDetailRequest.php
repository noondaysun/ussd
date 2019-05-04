<?php

namespace App\Domain\Requests\ContactDetail;

use Illuminate\Foundation\Http\FormRequest;

class ContactDetailRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mobile_telephone' => 'string|max:255',
            'house_telephone'  => 'string|max:255',
            'work_telephone'   => 'string|max:255',
            'physical_address' => 'string|max:1066',
            'postal_address'   => 'string|max:1066',
        ];
    }
}