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

// Route::get('/', function () {
//     return view('AdminSignUp.signUp');
// });

Route::get('/', function () {
    return view('AdminSignUp.login');
});

Route::get('/register', function () {
    return view('AdminSignUp.register');
});

Route::get('/sideBar', function () {
    return view('sidebar');
});

Route::get('/addNewJournal', function () {
    return view('AdminPages.Journal.addNewJournal');
});

Route::resource('signUp', 'AdminController');

// Route::resource('/signUp', 'AdminController');

Route::post('login', 'AdminController@login');

// Route::resource('/addJournal', 'NewJournalController');

Route::resource('addJournal', 'NewJournalController');

Route::resource('/showJournal', 'NewJournalController');

Route::get('addNewVolume/{id}', 'NewVolumeController@create');

Route::resource('/addNewVolume', 'NewVolumeController');

Route::get('/viewVolumes/{id}', 'NewJournalController@showJournalVolumes');

Route::get('/viewArticles/{id}/{vid}', 'NewVolumeController@showVolumeArticles');

Route::get('/addArticle/{id}/{vid}', 'NewArticleController@create');

Route::resource('/addArticle', 'NewArticleController');

Route::get('/fullText/{id}/{id1}', 'NewArticleController@show');
