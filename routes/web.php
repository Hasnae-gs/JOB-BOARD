<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\NouvelleDemande;

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
Route::get('/', 'IndexController@index');
Auth::routes();
Route::get('/login/candidat', 'Auth\LoginController@showCandidatLoginForm');
Route::get('/login/employeur', 'Auth\LoginController@showEmployeurLoginForm');
Route::get('/register/candidat', 'Auth\RegisterController@showCandidatRegisterForm');
Route::get('/register/employeur', 'Auth\RegisterController@showEmployeurRegisterForm');
Route::post('/login/candidat', 'Auth\LoginController@candidatLogin');
Route::post('/login/employeur', 'Auth\LoginController@employeurLogin');
Route::post('/register/candidat', 'Auth\RegisterController@createCandidat');
Route::post('/register/employeur', 'Auth\RegisterController@createEmployeur');
Route::view('/home', 'home')->middleware('auth');
Route::view('/jobpost','jobpost');
Route::post('logout/candidat', 'Auth\LoginController@logout')->name('logout');
Route::post('logout/employeur', 'Auth\LoginController@logout')->name('logout');
Route::view('/employeur','employeur');
Route::get('/search','CandidatController@search')->name('serchcve');
Route::view('/contact','contact');
Route::view('/conseil','conseil');

Route::get('add_offre',function () {
    return view('Offres/addOffre');
});
Route::post('save_offre','OffreController@save');
Route::get('mes_offres',function () {
    return view('Offres/mesOffres');
});
Route::get('mes_offres','OffreController@MyIndex')->name('mesOffres');

Route::get('edit_offre/{id}','OffreController@edit')->name('offre.edit');

Route::get('modifier','EmployeurController@modifier')->name('modifier');
Route::post('update_info','EmployeurController@updateinfo');

Route::get('Profil','EmployeurController@Profil')->name('Profil');

Route::get('supprimer_employeur','EmployeurController@supprimer');

Route::post('update_offre/{id}','OffreController@update');
Route::get('supprimer_offre/{id}','OffreController@destroy');
Route::post('/employeur','CountController@count');
Route::get('/employeur','CandidatController@profil')->name('profil');
Route::get('plusdtail/{id}','CandidatController@plus')->name('pluscandidat');
Route::get('serch_cand','DemandeController@serchs')->name('candidatures');
Route::get('/jobpost','ExperienceController@index')->name('index');
Route::get('/jobpost','OffreController@affoffre')->name('Postuler');
Route::get('plusoffre/{id_offre}','OffreController@plus')->name('plusoff');
Route::post('save_demande','DemandeController@save');
Route::get('mes_demande',function () {
    return view('Offres/mesdemande');
});
Route::get('/searchofrg','OffreController@searchofrg')->name('searchofrg');
Route::view('/plusinfo','plusinfo');
Route::post('saveexperience','ExperienceController@saveexperience')->name('saveexperience');
Route::post('savelangue','LangueController@savelangue')->name('savelangue');
Route::post('saveformation','FormationController@saveformation')->name('saveformation');
Route::post('saveprojet','ProjetController@saveprojet')->name('saveprojet');
Route::get('/','CandidatController@countc');
Route::resource('serchcve','CandidatController');
//acceptre ou Refuser une demande pour un candidat
Route::get('demande/{idd}','DemandeController@accepter')->name('accepter');
Route::get('annulation/{idd}','DemandeController@refuser')->name('refuser');
Route::get('candidaturs','CandidatController@show')->name('show');
Route::get('plusentreprises/{id}','EmployeurController@inf')->name('inf');



Route::get('postule/{ido}','DemandeController@postule')->name('postule');

Route::post('save_demande/{ido}','DemandeController@postule');
Route::get('save_demande',function () {
    return view('plusoffre');
});

Route::resource('serchofr','OffreController');

Route::get('/chercher','OffreController@chercher')->name('serchofr');
