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
    return view('welcome');
});

Auth::routes();

//Route::middleware(['Auth'])->group(function () {
  Route::get('/teamlist', 'TeamController@teamList');
  Route::get('/newTeam', 'TeamController@showNewTeamForm');
  Route::post('/teamProfile/team/{id}', 'TeamController@showTeamProfile');
  Route::get('newShift/team/{id}', 'ShiftController@showNewTeamForm');
  Route::post('newShift', 'ShiftController@createShift');
  Route::get('/shiftsList', 'ShiftController@shiftsList');
  Route::get('/profile', 'ProfileController@showProfile');
  Route::post('/profile', 'ProfileController@editProfile');
//}

Route::get('/home', 'HomeController@index')->name('home');
