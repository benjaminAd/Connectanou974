<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use App\realisateur_projets;

class ReaProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Statuts = DB::table('statut_realisateurs')->select('Statut', 'id')->get();
        $NiveauEtude = DB::table('niveau_etudes')->select('NiveauEtude', 'id')->get();
        $Ecoles = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 3)->get();
        $Domaines = DB::table('domaines')->select('Domaines', 'Id')->get();
        $Formations = DB::table('formations')->select('Formations', 'Id')->get();
        $Diplomes = DB::table('diplomes')->select('label', 'Id')->get();
        return view('Maquette InscriptionReaProjet.SubscribeReaProjet', [
            'NiveauxEtude' => $NiveauEtude,
            'Ecoles' => $Ecoles,
            'Statuts' => $Statuts,
            'Domaines' => $Domaines,
            'Formations' => $Formations,
            'Diplomes' => $Diplomes
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Récupération token et vérification de son existence
        $token = $request->get('g-recaptcha-response');
        if ($token == null) { // Lorsque que le captcha n'est pas coché $token récupère la valeur null
            // dd($token);
            return redirect()->route('SubscribeRea')->withErrors(['g-recaptcha-response' => 'veuillez cocher le Captcha']);
        }
        //Règles de validations
        $mdp = $request->get("password");
        $confmdp = $request->get("password2");
        if ($mdp != $confmdp) {
            return redirect()->route("SubscribeRea")->withErrors(["Diffmdp" => "Les Mots de Passes ne correspondent pas"]);
        }
        if (((DB::table('realisateur_projets')->where('Email', $request->get("mail"))->count()) == 1)) { //Si l'email est déjà dans la base alors on n'accepte pas l'inscription
            return redirect()->route('SubscribeRea')->withErrors(['MailUsed' => 'Cette Adresse E-mail est déjà utilisé par l\'un de nos clients']);
        }
        if ((DB::table('realisateur_projets')->where('Login', $request->get('login'))->count()) == 1) { //De même pour le pseudo
            return redirect()->route('SubscribeRea')->withErrors(['LoginUsed' => 'Ce pseudo est déjà utilisé par l\'un de nos clients']);
        }
        $this->validate($request, [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'mail' => 'required|email',
            'login' => 'required',
            'password' => 'required|min:6 |regex:#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)# ', //expression régulière autorisant au minimum une minuscule, majuscule,chiffre et un symbole
            'password2' => 'required|min:6|regex:#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#',
            'tel' => 'required|numeric',
            'naissance' => 'required|date',
            'check' => 'required'
        ]);
        //On récupère la formation selectionné dans le menu déroulant
        $formations = $request->get("Formation");
        if ($formations == "Autre") {
            if (((DB::table('realisateur_projets')->where('Email', $request->get("mail"))->count()) == 1)) { //Si l'email est déjà dans la base alors on n'accepte pas l'inscription
                return redirect()->route('SubscribeRea')->withErrors(['MailUsed' => 'Cette Adresse E-mail est déjà utilisé par l\'un de nos clients']);
            }
            //Si le client séléectionne autre alors on va insérer dans la bdd la valeur entrée dans le champs de saisie puis récupérer la valeur de l'id dans la var $formations
            if (((DB::table('formations')->where('Formations', $request->get('NomFormation'))->count()) == 0)) {
                DB::table('formations')->insert([
                    'Formations' => $request->get('NomFormation')
                ]);
            }
            $formations = DB::table('formations')->where('Formations', $request->get('NomFormation'))->value('Id');
        }
        $ecole = $request->get("Ecole");
        if ($ecole == "autre") {
            if (((DB::table('organisations')->where('RaisonSociale', $request->get('EcoleNom'))->count()) == 0)) {
                DB::table('organisations')->insert([
                    'IdTypeOrga' => 3,
                    'RaisonSociale' => $request->get('EcoleNom')
                ]);
            }
            $ecole = DB::table('organisations')->where('RaisonSociale', $request->get('EcoleNom'))->value('Id');
        }
        $diplome = $request->get("Diplome");
        if ($diplome == "Autre") {
            DB::table('diplomes')->insert([
                'label' => $request->get('NomDiplome')
            ]);
            $diplome = DB::table('diplomes')->where('label', $request->get('NomDiplome'))->value('Id');
        }
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
        //Création d'un réalisateur de projet
        $realisateur = new realisateur_projets([
            'Nom' => $request->get('nom'),
            'Prenom' => $request->get('prenom'),
            'Email' => $request->get('mail'),
            'Login' => $request->get('login'),
            'Mdp' => Hash::make($mdp),
            'Telephone' => $request->get('tel'),
            'DateNaissance' => $request->get("naissance"),
            'CVURL' => null,
            'IdOrga' => $ecole,
            'LinkedinURL' => $request->get('linkedin'),
            'NbProjets' => 0,
            'NbPoints' => 0,
            'IdNiveauEtudes' => $request->get('NiveauEtude'),
            'IdDiplomes' => $diplome,
            'IdFormations' => $formations,
            'IdStatut' => $request->get('statut'),
            'IdDomaine' => $request->get('Domains')
        ]);
        $realisateur->save();
        $id = DB::table('realisateur_projets')->where('Login', $request->get('login'))->value('Id');
        //L'id n'étant attribué que lors de la sauvegarde dans la bdd, on met à jour la base avec le path du CV qui a été uploader par le client et en donnant comme nom l'id qui vient d'être attribué
        DB::table('realisateur_projets')->where('Id', $id)->update(['CVURL' => $this->uploadDoc($request, $id)]);
        return redirect()->route('connect')->with('sucess', 'Réalisateur ajouté');
    }
    function uploadDoc(Request $request, $id)
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
            'select_file' => 'required|file|mimes:doc,docx,pdf|max:2048'
        ]);
        $cv = $request->file('select_file'); //Méthode fournie par Laravel afin de récupérer le fichier uploader
        $new_name = $id . '.' . $cv->getClientOriginalExtension(); //La variable new_name va nous permettre de renommer l'image comme bon nous semble et on récupère l'extension originale du fichier
        //dans ce cas, on renome l'image avec l'id de l'organistion et on reprend l'extension du fichier uploader par client
        $cv->move(public_path("CV"), $new_name); //Méthode fournie par Laravel qui permet de donner le nouveau chemin pour le fichier uploader
        return public_path("CV\\") . $new_name; //Renvoie le path du fichier afin de l'ajouter dans la bdd dans la fonction store
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
