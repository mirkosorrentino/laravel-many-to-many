<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
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
                'max:100',
                Rule::unique('projects')
            ],
            'description'=>'required',
            'type_id' => ['nullable', 'exists:types,id']
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Il campo "titolo" è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',
            'title.unique' => 'Esiste già un progetto con questo titolo',
            'description.required' => 'Il campo "descrizione" è obbligatorio'
        ];
    }
}
