<?php

namespace App\Http\Controllers;

use App\Depot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\projets;
use App\Projet;

class DepotController extends Controller

{
    public function __construct()
    {
        // $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // on recherche dans la base de données  dans la table "depot" les annonces et les classées par ordre de création
        // et on stock le resultat de la recherche dans une variable

        $RechercheAnnonce = DB::table('projets')->orderBy('created_at')->paginate(3);

        return view('Recherche', compact('RechercheAnnonce'));
    }
    public function create()
    {
        return view('maquette depot_projet.depot_projet');
    }

    public function store(Request $request)
    {
        // régles de validation pour le formulaire
        $this->validate($request, [
            'titre_projet' => 'required',
            'type_projet' => 'required',
            'desc_projet' => 'required',
            'date_debut' => 'required',
            'date_butoir_projet' => 'required',
            'Budget_min_projet' => 'required',
            'Budget_max_projet' => 'required'
        ]);
        // on utilise la request http et on stock nos données dans une variable
        $depot = $request->get('titre_projet');
        $depot1 = $request->get('type_projet');
        $depot2 = $request->get('desc_projet');
        $depot3 = $request->get('date_debut');
        $depot4 = $request->get('date_butoir_projet');
        $depot5 = $request->get('URL_PJ');
        $depot6 = $request->get('Budget_min_projet');
        $depot7 = $request->get('Budget_max_projet');

        // permet de créer un nouveau dépôt de projet grâce App\depot déjà importée dans le controller

        $depot_projet = new Projet();

        // dans chaque cas $depot_projet va correspondre à un champs de la BDD auquel on lui associe un champs dans le formulaire 
        $depot_projet->titre_projet = $depot;
        $depot_projet->type_projet = $depot1;
        $depot_projet->desc_projet = $depot2;
        $depot_projet->date_debut = $depot3;
        $depot_projet->date_butoir_projet = $depot4;
        $depot_projet->URL_PJ = $depot5;
        $depot_projet->Budget_min_projet = $depot6;
        $depot_projet->Budget_max_projet = $depot7;

        // save() permet de sauvegarder et persister les données dans la base de données
        $depot_projet->save();

        // 
        return redirect()->route('RechercheAnnonce');
        //->with('success', 'Votre annonce a été postée ');
        // dd($request);
    }

    public function search(Request $request)
    {
        $words = $request->words;

        $depot_projets = DB::table('projets')->where('titre_projet', 'LIKE', "%$words%")
            ->orwhere('desc_projet', 'LIKE', "%$words%")
            ->orderBy('created_at', 'DESC')
            ->get();

        return response()->json(['success' => true, 'depots' => $depot_projets]);
    }
}
