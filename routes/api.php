<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('user', function (Request $request) { return response()->json(auth('api')->user()); });

Route::post('login', 'AuthController@login')->name('login');
Route::post('register', 'AuthController@register')->name('register');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('dogs', 'DogsController@index')->name('dogs.index');
Route::get('dogs/{dog_id}', 'DogsController@show')->name('dogs.show');
Route::get('shelterhasdogs/{shelter_id}', 'ShelterHasDogsController@index')->name('shelterhasdogs.index');
Route::get('doglookerchosedogs/{doglooker_id}', 'DoglookerChoseDogsController@index')->name('shelterhasdogs.index');
Route::get('doglooker/{doglooker_id}', 'DoglookerController@index')->name('doglooker.index');


Route::post('interests', 'InterestsController@store')->name('interests.store');

Route::get('interested-people/{dog_id}', 'InterestedPeople@index')->name('interestedPeople.index');
