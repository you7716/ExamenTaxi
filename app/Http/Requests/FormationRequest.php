<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationRequest extends FormRequest
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
               /* 'nom_form' => 'required|min:2|unique:formations,libelle',
                'dure' => 'required|max_digits: 2 | min_digits: 1  | numeric',
                'description' => 'required|min:5',
                'referentiel' => 'required',
                'dateD' => 'required|date|after:yesterday',
                'Form_image' => 'image|nullable|max:1999'*/
        ];
    }

    public function messages()
    {
        return [
            'nom_form.required' => 'Le champ libelle Form. est obligatoire',
            'nom_form.unique' => 'Le champ Libelle Form. existe déja',
            'nom_form.min' => 'Le champ Libelle Form. contenir ou moins 2 caracteres',            
            'referentiel.required' => 'Le choix du referentiel est obligatoire',
        ];
    }
}
