<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Page d'Accueil
Route::get('/', function () {
    return view('Accueil');
});
//Page à propos de l'association Connectanou
Route::get('a-propos', function () {
    return view("maquette a-propos.a-propos");
});
//Page Notre équipe
Route::get('ourTeam', function () {
    return view('Maquette Notre_equipe.section_equipe');
})->name('equipe');
//Inscription du Porteur de Projet
Route::get('SubscribePortProjet', 'PorteurController@index')->name('PortProjetSub');
//Appel au controleur Porteur lors de la validation du formulaire d'inscription porteur
Route::resource('Porteur', 'PorteurController');
//Inscription d'une organisation, association lien cliquable sur le formulaire de l'inscription du porteur de projets
Route::get('SubscribeOrga', 'OrganisationController@index')->name('SubscribeOrga');
Route::resource('Organisation', 'OrganisationController');
//Inscription du Réalisateur de prjets
Route::get('SubscribeReaProjet', 'ReaProjetController@index')->name('SubscribeRea');
Route::resource('Realisateur', 'ReaProjetController');

//Route pour la Connexion en Post et Get
Route::get('login', 'LoginController@formulaire')->name('connect');
Route::post('login', 'LoginController@traitement');
//Route Mot de PAsse oublié
Route::get('Forgot', function () {
    return view('Maquette MdpForgot.mdpForgot');
});
//Page Mentions Légales
Route::get('mentionLegal', function () {
    return view('Maquette mentionLegale.mentionLegal');
});
//Landing page Réalisateur de projets, incitation à l'inscription
Route::get('landingRea', function () {
    return view('maquette landing_rea.landing_rea');
});
//Landing page Porteur de projets, incitation à l'inscription
Route::get('landingPor', function () {
    return view('maquette landing_porteur.landing_por');
});
//Page des Dons pour l'association - HelloAsso
Route::get('donAsso', function () {
    return view("maquette don.don");
});
//Page contact
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');
//formulaire de dépôt de projet 
Route::get('annonce', 'DepotController@create')->name('annonce.create');
Route::post('annonce/create', 'DepotController@store')->name('annonce.store');
// différentes parties pour la recherche de projet
Route::get('Recherche', 'DepotController@index')->name('RechercheAnnonce');
Route::post('search', 'DepotController@search')->name('recherche.search');
//Partie forum
//le framework va relier les action et methodes de notre TopicController à certaines routes qui on comme préfixe topics
// la méthode except() permet de ne pas relier certaines routes
//Route::post('topics','TopicController')->except(['index']);

Route::resource('topics', 'TopicController');
// route::get('/','TopicController@index');
// route::get('forum','TopicController@index');

route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');


// cette route permet de définir ou l'on posté cette réponse au commentaire en fonction de son id
Route::post('/commentReply/{comment}', 'CommentController@storeCommentReply')->name('comments.storeReply');
