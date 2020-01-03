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

Route::get('/', function () {
    return view('Accueil');
});

Route::get('a-propos', function () {
    return view("maquette a-propos.a-propos");
});

Route::get('ourTeam', function () {
    return view('Maquette Notre_equipe.section_equipe');
})->name('equipe');
Route::get('SubscribePortProjet', 'PorteurController@index')->name('PortProjetSub');
Route::get('SubscribeOrga', 'OrganisationController@index')->name('SubscribeOrga');
Route::get('SubscribeReaProjet', 'ReaProjetController@index')->name('SubscribeRea');
Route::get('login', 'LoginController@formulaire')->name('connect');
Route::post('login', 'LoginController@traitement');


Route::get('Forgot', function () {
    return view('Maquette MdpForgot.mdpForgot');
});
Route::get('mentionLegal', function () {
    return view('Maquette mentionLegale.mentionLegal');
});
Route::get('landingRea', function () {
    return view('maquette landing_rea.landing_rea');
});
Route::get('landingPor', function () {
    return view('maquette landing_porteur.landing_por');
});
Route::resource('Porteur', 'PorteurController'); //Appel au controleur Porteur lors de la validation du formulaire d'inscription porteur
Route::resource('Organisation', 'OrganisationController');
Route::resource('Realisateur', 'ReaProjetController');

//contact
// définition de la route 'contact'
// on peut nommer nos routes à l'aide de ->name('')
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

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

// Ces routes géres l'accés au différentes parties pour le formulaire de dépôt de projet 
Route::get('annonce', 'DepotController@create')->name('annonce.create');
Route::post('annonce/create', 'DepotController@store')->name('annonce.store');


// Ces routes géres l'accés au différentes parties pour la recherche de projet
Route::get('Recherche', 'DepotController@index')->name('RechercheAnnonce');
Route::post('search', 'DepotController@search')->name('recherche.search');

Route::get('donAsso', function () {
    return view("maquette don.don");
});
