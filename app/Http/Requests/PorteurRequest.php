<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PorteurRequest extends FormRequest
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
            'password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/', 
            'mail' => 'required|email',
            'nom' => 'required',
            'prenom' => 'required',
            'type_organisation' => 'required',
            'pseudo' => 'nullable',
            'tel' => 'nullable|numeric',
            'Poste' => 'nullable',
            'mentionsLegales' => 'required',
            'g-recaptcha-response' => 'required',
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
            'type_organisation.required' => 'Vous devez entrer une entreprise ou une association ou un poste<br> en tant que particulier',
            'password.confirmed' => 'Les deux mots de passe ne sont pas identiques.',
            'password.regex' => 'Votre mot de passe doit comporter plus de 8 caractères et doit contenir au moins<br> 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial.',
            'mentionsLegales.required' => 'Veuillez cocher la case ci-dessous.',
            'g-recaptcha-response.required' => 'Veuillez cocher le captcha.',
        ];
    }
}
