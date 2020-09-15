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

// promotions
Route::get('/promotions', function () {
    return view('promos.list');
});
Route::get('/ajouter-promos', function () {
    return view('promos.create');
}); 
Route::post('/ajouter-promos', 'PromoController@store')->name('add-promo');

Route::get('/modifier-promo', function () {
    return view('promos.edit');
});

// classroom 
Route::get('/classes', function () {
    return view('classroom.list');
});
Route::get('/ajouter-class','classroomController@create')->middleware('auth');

Route::post('/ajouter-class', 'classroomController@store')->name('add-class');

Route::get('/modifier-class', function () {
    return view('classroom.edit');
});

// trainees 
Route::get('/apprenants', function () {
    return view('trainees.list');
});
Route::get('/ajouter-apprenant', function () {
    return view('trainees.create');
});
Route::post('/ajouter-apprenant', 'traineeController@store')->name('add_trainee');

Route::get('/modifier-info-de-apprenant', function () {
    return view('trainees.edit');
});

// training 
Route::get('/formateur', function () {
    return view('training.list');
});
Route::get('/ajouter-formateur', function () {
    return view('training.create');
});
Route::post('/ajouter-formateur', 'trainingController@store')->name('add_training');

Route::get('/modifier-info-de-formateur', function () {
    return view('training.edit');
});

// hardware 
Route::get('/materiels', function () {
    return view('hardware.list');
});
Route::get('/ajouter-materiel', function () {
    return view('hardware.create');
});
Route::get('/modifier-info-de-materiel', function () {
    return view('hardware.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard
Route::get('/', function () {
    return view('home');
});

