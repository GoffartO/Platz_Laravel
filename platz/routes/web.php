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

// Routes par défaut
Route::get('/', 'RessourcesController@index')->name('homepage');

// Route ressources/show
 Route::get('/{id}', 'RessourcesController@show')
    ->name('ressources.show')
    ->where('id', '[0-9]+');

// ROUTE NEWSLETTER
Route::post('/newsletters/store', 'NewslettersController@store')->name('newsletters.store');

// Routes Voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Routes Authentication
Auth::routes();

/* Vue composer */

View::composer(['categories.menu','categories.menuIcon'], function($view){
  $view->with('categories', App\Http\Models\Categorie::all());
});
