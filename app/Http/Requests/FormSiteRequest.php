<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSiteRequest extends FormRequest
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
            'email'=>[ 'required', 'email'],
            'message'=>['required','min:3','max:150'],
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'Inserisci il dato corretto',
            'email.email' => 'inseirisci la email corretta',
            'message.required' => 'il campo testo è obligatorio',
            'message.min' => 'il campo testo ha un min di 3 caratteri',
        ];
    }
}
