<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepotRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titre_projet' => 'required|alpha_dash',
            'type_projet' => 'required',
            'desc_projet' => 'required|alpha_dash',
            'date_debut' => 'date|after_or_equal:today',
            'date_butoir_projet' => 'required|date|after:date_debut',
            'Budget_min_projet' => 'numeric',
            'Budget_max_projet' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'titre_projet' => 'titre du projet',
            'type_projet' => 'type du projet',
            'desc_projet' => 'description',
            'date_debut' => 'date de début',
            'date_butoir_projet' => 'date butoir',
            'Budget_min_projet' => 'budget minimum',
            'Budget_max_projet' => 'budget maximum',
        ]; 
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'date_debut.after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à aujourd\'hui.',
        ];
    }
}
