<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealisateurRequest extends FormRequest
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
            'nom' => 'required|alpha_dash',
            'prenom' => 'required|alpha_dash',
            'naissance' => 'nullable|date|before_or_equal:today',
            'telephone' => 'nullable|numeric',
            'statut' => 'required',
            // 'ecole' => 'required',
            'domaine' => 'required',
            'NiveauEtude' => 'required',
            'Diplome' => 'nullable',
            'mail' => 'required|email|unique:realisateur_projets,Email',
            'login' => 'nullable|alpha_dash|unique:realisateur_projets,Login',
            'password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'linkedin' => 'nullable|url',
            'check' => 'required',
            'g-recaptcha-response' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mail.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'login.unique' => 'Ce pseudo est déjà utilisé par l\'un de nos clients.',
            'naissance.before_or_equal' => 'La date de naissance est incorrecte.',
            'NiveauEtude.required' => 'Le champ niveau d\'études est obligatoire.',
            'login.alpha_dash' => 'Le champ pseudo doit contenir uniquement des lettres, des chiffres et des tirets.',
            'password.confirmed' => 'Les deux mots de passe ne sont pas identiques.',
            'password.regex' => 'Votre mot de passe doit comporter plus de 8 caractères et doit contenir au moins<br> 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial.',
            'check.required' => 'Veuillez cocher la case ci-dessous.',
            'g-recaptcha-response.required' => 'Veuillez cocher le captcha ci-dessous.',
        ];
    }
}
