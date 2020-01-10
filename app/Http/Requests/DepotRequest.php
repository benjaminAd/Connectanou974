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
            'date_debut' => 'date|after:yesterday',
            'date_butoir_projet' => 'required|date|after:date_debut',
            'Budget_min_projet' => 'numeric',
            'Budget_max_projet' => 'required|numeric',
            'g-recaptcha-response' => 'required',
        ];
    }
}
