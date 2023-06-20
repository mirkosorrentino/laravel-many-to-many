<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'title'=>[
                'required', 
                'min:3', 
                'max:100'
            ],
            'description'=>'nullable',
            'creator' => 'nullable',
            'date_of_birth' => [
                'nullable',
                'date_format:Y-m-d'
                ]
        ];
    }

     public function messages() {
        return [
            'title.required' => 'Il campo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',
            'date_of_birth.date_format' => 'Il campo deve avere il formato YYYY-mm-dd'
        ];
    }
}
