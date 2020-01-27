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
            'mail' => 'required|email|unique:porteurs,Email',
            'nom' => 'required',
            'prenom' => 'required',
            'type_organisation' => 'required',
            'NomEntreprise' => 'required_if:type_organisation,entreprise',
            'NomAssociation' => 'required_if:type_organisation,association',
            'pseudo' => 'nullable|unique:porteurs,Login',
            'tel' => 'nullable|numeric',
            'Poste' => 'required_if:type_organisation,particulier',
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
            'mail.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'pseudo.unique' => 'Ce pseudo est déjà utilisé par l\'un de nos clients.',
            'type_organisation.required' => 'Vous devez entrer une entreprise ou une association ou un poste<br> en tant que particulier',
            'NomEntreprise.required_if' => 'Le champ nom de l\'entreprise est obligatoire.',
            'NomAssociation.required_if' => 'Le champ nom de l\'association est obligatoire.', 
            'password.confirmed' => 'Les deux mots de passe ne sont pas identiques.',
            'password.regex' => 'Votre mot de passe doit comporter plus de 8 caractères et doit contenir au moins<br> 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial.',
            'Poste.required_if' => 'Le champ poste est obligatoire.',
            'mentionsLegales.required' => 'Veuillez cocher la case ci-dessous.',
            'g-recaptcha-response.required' => 'Veuillez cocher le captcha ci-dessous.',
        ];
    }
}
