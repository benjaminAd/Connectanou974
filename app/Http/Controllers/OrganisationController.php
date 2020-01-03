<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisations;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = DB::table('type_organisations')->select('TypeOrganisation', 'Id')->get();
        $codePostaux = DB::table('code_postaux')->select('CodePostal', 'Ville', 'Id')->get();
        return view('Maquette InscriptionOrganisation.SubscribeOrganisation', [
            'types' => $type,
            'codePostaux' => $codePostaux
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Récupération token et vérification de son existence
        $token = $request->get('g-recaptcha-response');
        if ($token == null) { // Lorsque que le captcha n'est pas coché $token récupère la valeur null
            // dd($token);
            return redirect()->route('SubscribeOrga')->withErrors(['g-recaptcha-response' => 'veuillez cocher le Captcha']);
        }
        //Vérification des différents champs de la requête
        $this->validate($request, [
            'siret' => 'required|digits:14|numeric',
            'RaisonSociale' => 'required',
            'telephone' => 'required|numeric',
            'site' => 'required',
            'adresse' => 'required',
            'CodePostal' => 'required|numeric',
            'Ville' => 'required',
            'activite' => 'required',
            'checkbox' => 'required'
        ]);
        //Création du client et de la vérification du captcha par google
        $client = new Client([
            'base_uri' => 'https://www.google.com/recaptcha/api/',
            'timeout' => 5.0
        ]);
        $reponse = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => env('CAPTCHA_SECRET'),
                'response' => $token
            ]
        ]);
        $resultat = json_decode($reponse->getBody()->getContents());
        // dd($resultat);
        if (!$resultat->success) {
            return redirect()->route('SubscribeOrga')->withErrors(['g-recaptcha-response' => 'Une erreur est survenue veuillez compléter le Captcha']);
        }
        $idCP = DB::table('code_postaux')->where('CodePostal', $request->get('CodePostal'))->value('Id'); //Récupère l'id du Code Postal correspondant à celui entrer dans le champs
        //Crée la variable organisation pour ensuite la sauvegarde dans la bdd avec -> save()
        $organisation = new Organisations([
            'SIRET' => $request->get('siret'),
            'IdCP' => $idCP,
            'IdTypeOrga' => $request->get('typeOrganisation'),
            'IdPorteur' => null,
            'RaisonSociale' => $request->get('RaisonSociale'),
            'LogoURL' => 'un url quelconque',
            'Activite' => $request->get('activite'),
            'Telephone' => $request->get('telephone'),
            'NbSalaries' => $request->get('salariés'),
            'SiteUrl' => $request->get('site'),
            'Adresse' => $request->get('adresse')
        ]);
        $organisation->save();
        $id = DB::table('organisations')->where('SIRET', $request->get('siret'))->value('Id');
        //L'id n'étant attribué que lors de la sauvegarde dans la bdd, on met à jour la base avec le path de l'image qui a été uploader par le client et en donnant comme nom l'id qui vient d'être attribué
        DB::table('organisations')->where('Id', $id)->update(['LogoURL' => $this->uploadImg($request, $id)]);
        return redirect()->route('PortProjetSub')->with('success', 'Organisation ajoutée');
    }

    function uploadImg(Request $request, $id)
    {
        /**
         * Condition afin d'accepter le fichier:
         *  Le champs ne peut pas être vide
         * image
         * Extension : jpg,jpeg,png
         * Taille maximale de 2048 octets
         * @return Path du fichier uploader 
         */
        $this->validate($request, [
            'select_file' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $image = $request->file('select_file'); //Méthode fournie par Laravel afin de récupérer le fichier uploader
        $new_name = $id . '.' . $image->getClientOriginalExtension(); //La variable new_name va nous permettre de renommer l'image comme bon nous semble
        //dans ce cas, on renome l'image avec l'id de l'organistion et on reprend l'extension du fichier uploader par client
        $image->move(public_path("img/Logo"), $new_name); //Méthode fournie par Laravel qui permet de donner le nouveau chemin pour le fichier uploader
        return public_path("img\Logo\\") . $new_name; //Renvoie le path du fichier afin de l'ajouter dans la bdd dans la fonction store
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
