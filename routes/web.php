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

/*
  MISES A DISPOSITION DE DONNEES POUR CERTAINES VUES
*/

  // Gestion dynamique du menu
    View::composer('pages.menu', function($view){
      $view->with('pages', App\Http\Models\Page::all());
    });

/*
  ROUTES
*/
  // Route par défaut
    Route::get('/', 'PagesController@show')->name('homepage');

  // Route pages
    Route::resource('pages', 'PagesController');

  // Route posts
    Route::resource('posts', 'PostsController');
