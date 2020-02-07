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

//use Illuminate\Routing\Route;

Route::get('/', 'HomeController@index')->name('home');

// A propos de l'association Connectanou
Route::get('a-propos', 'AboutController@index');

// Notre équipe
Route::get('ourTeam', 'EquipeController@index')->name('equipe');

// Inscription du Porteur de Projet
Route::get('SubscribePortProjet', 'PorteurController@index')->name('PortProjetSub');
// Appel au controleur Porteur lors de la validation du formulaire d'inscription porteur
Route::resource('Porteur', 'PorteurController');

// Inscription d'une organisation, association lien cliquable sur le formulaire de l'inscription du porteur de projets
Route::get('SubscribeOrga', 'OrganisationController@index')->name('SubscribeOrga');
Route::resource('Organisation', 'OrganisationController');

// Inscription du Réalisateur de projets
Route::get('SubscribeReaProjet', 'ReaProjetController@index')->name('SubscribeRea');
Route::resource('Realisateur', 'ReaProjetController');

// Plan du site - liens vers toutes les pages du site
Route::get('/plan', 'SitemapController@index');

// Connexion en Post et Get
Route::get('login', 'LoginController@formulaire')->name('connect');
Route::post('login', 'LoginController@traitement');
Route::post('deconnexion', 'LoginController@logout')->name('logout');
// Mot de passe oublié
Route::get('forgot', 'LoginController@forgot_password');

// Profil
Route::get('profil', 'ProfilController@index');

// Mentions légales
Route::get('mentions-legales', 'MentionsController@index');

// Landing page Réalisateur de projets, incitation à l'inscription
Route::get('landingRea', 'LandingController@realisateur')->name('landingRea');

// Landing page Porteur de projets, incitation à l'inscription
Route::get('landingPor', 'LandingController@porteur')->name('landingPor');

// Dons pour l'association - HelloAsso
Route::get('donAsso', 'DonController@index')->name('donAsso');

// Contact
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

// Formulaire de dépôt de projet pour les porteurs de projets
Route::get('annonce', 'DepotController@create')->name('annonce.create')->middleware('auth:porteur');
Route::post('annonce/create', 'DepotController@store')->name('annonce.store');

// Différentes parties pour la recherche de projets
Route::get('Recherche', 'DepotController@index')->name('RechercheAnnonce');
Route::post('search', 'DepotController@search')->name('recherche.search');

// Forum

//le framework va relier les actions et methodes de notre TopicController à certaines routes qui ont comme préfixe topics
// la méthode except() permet de ne pas relier certaines routes
//Route::post('topics','TopicController')->except(['index']);
Route::resource('topics', 'TopicController');
// route::get('/','TopicController@index');
// route::get('forum','TopicController@index');
Route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');
// cette route permet de définir ou l'on posté cette réponse au commentaire en fonction de son id
Route::post('/commentReply/{comment}', 'CommentController@storeCommentReply')->name('comments.storeReply');
