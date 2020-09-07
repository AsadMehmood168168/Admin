<?php

use Illuminate\Support\Facades\Route;

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
    return view('AdminSignUp.signUp');
});

Route::get('/', function () {
    return view('AdminSignUp.signUp');
});

Route::get('/homePage', 'AdminController@homePage');

Route::get('/viewNinjas', 'MyController@create');

Route::resource('signUp', 'AdminController');

Route::post('login', 'AdminController@login');

Route::resource('/addJournal', 'NewJournalController');

Route::resource('addJournal', 'NewJournalController');

Route::resource('/showJournal', 'NewJournalController');

Route::get('addNewVolume/{id}', 'NewVolumeController@create');

Route::resource('/addNewVolume', 'NewVolumeController');

Route::get('/viewVolumes/{id}', 'NewJournalController@showJournalVolumes');

Route::get('/viewArticles/{id}/{vid}', 'NewVolumeController@showVolumeArticles');

Route::get('/addArticle/{id}/{vid}', 'NewArticleController@create');

Route::resource('/addArticle', 'NewArticleController');

Route::get('/showArtilceText/{id}', 'NewArticleController@show');
