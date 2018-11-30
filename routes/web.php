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

/**Route::get('/', function () {
    echo "teste";exit;
    return view('welcome');
});
 */
Route::get('/',                 ['as'=> 'site.index',   'uses'  => 'Site\IndexController@index']);
Route::get('/admin',            ['as'=> 'admin.index',  'uses'  => 'Admin\MusicController@index']);
Route::get('/admin/create',     ['as'=> 'admin.create', 'uses'  => 'Admin\MusicController@create']);
Route::get('/admin/edit/{id}',  ['as'=> 'admin.edit',   'uses'  => 'Admin\MusicController@edit']);
Route::post('/admin/store',     ['as'=> 'admin.store',  'uses'  => 'Admin\MusicController@store']);
Route::put('/admin/update/{id}',['as'=> 'admin.update', 'uses'  => 'Admin\MusicController@update']);
Route::get('/admin/delete/{id}',['as'=> 'admin.delete', 'uses'  => 'Admin\MusicController@delete']);

