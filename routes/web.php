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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/statistiques', 'statistiquesController@totalValue')->name('statistiques');

Route::get('/mouvements', 'mouvementsController@mouvements')->name('mouvements');

Route::get('/saisiemouvement', 'saisiemouvementController@view')->name('saisiemouvement');

Route::get('/listearticle', 'listearticleController@articles')->name('listearticle');

Route::get('/listearticle/{id}', 'listearticleController@delete_article')->name('delete-article');
Route::get('/modifyarticle/{id}', 'listearticleController@viewmodify')->name('modify-article');
Route::post('/modify/{id}', 'listearticleController@modify')->name('modify');
Route::get('/impossible/{id}', 'impossibleController@impossible')->name('impossible');
Route::get('/createarticle', 'listearticleController@create_article')->name('create-article');
Route::post('/create', 'listearticleController@create')->name('create');

Route::post('/saisiemouvement/create', 'saisiemouvementController@create');

Route::get('/selectModifArticle', 'selectModifArticleController@view')->name('selectModifArticle');

Route::post('/modifArticle', 'selectModifArticleController@modify');