<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * 
 * GET|HEAD        comics .......................................... comics.index › ComicsController@index  
  POST            comics .......................................... comics.store › ComicsController@store  
  GET|HEAD        comics/create ................................. comics.create › ComicsController@create  
  GET|HEAD        comics/{comic} .................................... comics.show › ComicsController@show  
  PUT|PATCH       comics/{comic} ................................ comics.update › ComicsController@update  
  DELETE          comics/{comic} .............................. comics.destroy › ComicsController@destroy  
  GET|HEAD        comics/{comic}/edit ............................... comics.edit › ComicsController@edit 

 */
Route::resource('/', ComicsController::class);