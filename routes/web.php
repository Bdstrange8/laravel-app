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



// Route::get('/hello', function () { //can return html which will be parsed
//     return '<h1> Hello world </h1>';
// });

                              

// Route::get('/users/{id}/{name}', function ($id, $name) { //can return dynamic variables passed from URL
//     return 'This is user '.$name. ' with id of ' .$id;
// });

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

 

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', 'App\Http\Controllers\PostsController'); // full government name to work

// Route::get('/', 'App\Http\Controllers\PagesController@index'); // this is another way to do the above 


// Route::get('/about', function () { // in this case since we have a folder called
//     return view('pages.about');    // pages within views, to access files within that folder, 
// });                                // we can use pages.about -OR- pages/about

