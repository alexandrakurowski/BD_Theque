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

// Route::get('/', function () {
//     return view('welcome');
// });

// *******************************route page accueil***************************************
Route::get('/', function(){
	return view('accueil');
});

Route::get('/', 'AccueilController@getAllBd');


// ****************************Routes page utilisateurs*********************************

// Route::get('/', function(){
// 	return 'Users !';
// });




  
// Model users.php  Eloquent créé un tableau de la bd sans que celui-ci soit crée en dur
// Route::get('users', function()
// {
//     $users = Users::all();

//     return View::make('users')->with('users', $users);
// });

//Route::get('users', 'UserController@getIndex');// apl la methode getindex dans le controleur Usercontroller
