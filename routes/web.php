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

Route::get('login', function () { return view('login'); });
Route::get('login', function () { return view('login'); });
Route::get('/', 'DocdetailController@indexUser');
Route::get('/dashboard', 'DashboardController@index');
Route::get('dokumen/download/{filename}', 'DokumenController@getDownload');
Route::get('/detail/{standartid}', 'DocdetailController@userDetail');
Route::group(['middleware' => 'usersession'], function () {
    Route::resource('user','UserController');
    Route::resource('doctipe','DoctipeController');
    Route::resource('form','FormController');
    Route::resource('standartlkpp','StandartLKPPController');
    Route::resource('lkpp','DocdetailController');
    Route::resource('dokumen','DokumenController');
    Route::get('lkpp/detail/{standartid}', 'DocdetailController@detail');
    Route::get('lkpp/create/{standartid}', 'DocdetailController@create');
    Route::get('dokumen/manage/{detailid}', 'DokumenController@index');
    Route::get('dokumen/manage/{detailid}/{docid}', 'DokumenController@form');
    Route::get('dokumen/manage/delete/{std}/{id}', 'FormController@delete');
});
Route::post('upload', 'DokumenController@upload')->name('upload.upload');
Route::get('uploaddelete/{id}', 'DokumenController@uploaddelete');
Route::post('attempt', 'LoginController@attempt')->name('login.attempt');
Route::get('destroy', 'LoginController@destroy')->name('login.destroy');
Route::get('dokumen/import/{docid}', 'FormController@import');

