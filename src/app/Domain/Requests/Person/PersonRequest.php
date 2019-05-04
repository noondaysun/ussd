<?php

namespace App\Domain\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => [
                null,
                Rule::in(['Mr', 'Mrs', 'Ms', 'Mx', 'Dr', 'Prof', 'Sir', 'Madam', 'Dame'])
            ],
            'first_name'  => 'required|string|max:255',
            'middle_name' => 'string|max:255',
            'surname'     => 'required|string|max:255',
        ];
    }
}