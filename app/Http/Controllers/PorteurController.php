<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Porteur;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class PorteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 1)->get();
        $associations = DB::table('organisations')->select('RaisonSociale', 'Id')->where('IdTypeOrga', 2)->get();
        return view('Maquette InscriptionPorteurProjet.SusbcribePortProjet', [
            'entreprises' => $entreprises,
            'associations' => $associations
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
            return redirect()->route('PortProjetSub')->withErrors(['g-recaptcha-response' => 'veuillez cocher le Captcha']);
        }
        //Ajout des règles de validations
        $this->validate($request, [
            'password' => 'required|min:6 |regex:#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)# ', //expression régulière autorisant au minimum une minuscule, majuscule,chiffre et un symbole
            'password2' => 'required|min:6|regex:#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#',
            'mail' => 'required|email',
            'nom' => 'required',
            'prenom' => 'required',
            'pseudo' => 'required',
            'tel' => 'required',
            'Poste' => 'required',
            'mentionsLegales' => 'required',

        ]);
        $password = $request->get('password');
        $confPassword = $request->get('password2');
        if (((DB::table('porteurs')->where('Email', $request->get("mail"))->count()) == 1)) { //Si l'email est déjà dans la base alors on n'accepte pas l'inscription
            return redirect()->route('PortProjetSub')->withErrors(['MailUsed' => 'Cette Adresse E-mail est déjà utilisé par l\'un de nos clients']);
        }
        if ((DB::table('porteurs')->where('Login', $request->get('pseudo'))->count()) == 1) { //De même pour le pseudo
            return redirect()->route('PortProjetSub')->withErrors(['LoginUsed' => 'Ce pseudo est déjà utilisé par l\'un de nos clients']);
        }
        if ($password != $confPassword) {
            return redirect()->route('PortProjetSub')->withErrors(['Diffmdp' => 'Les Mots de Passes ne correspondent pas']);
        }
        //Vérification si le client a choisi une entreprise, une association ou s'il est un particulier
        if ($request->get('NomEntreprise') != "") {
            $Orga = (int) $request->get('NomEntreprise'); //
        } else if ($request->get('NomAssociation') != "") {
            $Orga = (int) $request->get('NomAssociation');
        } else if ($request->get('typeOrganisation') == "particulier") {
            $Orga = null; //Si c'est un particulier alors il n'appartient à aucune Organisation
        } else {

            return redirect()->route('PortProjetSub')->withErrors(['ErreurOrganisation' => 'Vous devez entrez une Entreprise ou une Association ou un poste en tant que Particulier']);
        }
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
            return redirect()->route('PortProjetSub')->withErrors(['g-recaptcha-response' => 'Une erreur est survenue veuillez compléter le Captcha']);
        }
        $porteur = new Porteur([
            'IdOrga' => $Orga,
            'Nom' => $request->get('nom'),
            'Prenom' => $request->get('prenom'),
            'Email' => $request->get('mail'),
            'Login' => $request->get('pseudo'),
            'Mdp' => Hash::make($password),
            'Telephone' => $request->get('tel'),
            'Poste' => $request->get('Poste')
        ]);
        $porteur->save();
        $id = DB::table('porteurs')->where('Login', $request->get('pseudo'))->value('Id');
        DB::table('organisations')->where('Id', (int) $Orga)->update(['IdPorteur' => $id]);
        return redirect()->route('connect')->with('sucess', 'Porteur ajouté');
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
