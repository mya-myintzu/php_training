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

Route::get('/' , 'StudentController@list')->name('list');
Route::group(['prefix'=>'student'],function(){
    Route::get('insert' , 'StudentController@insert')->name('insert');
    Route::post('create' , 'StudentController@create')->name('create');
    Route::get('edit/{id}' , 'StudentController@edit')->name('edit');
    Route::post('update/{id}' , 'StudentController@update')->name('update');
    Route::get('delete{id}' , 'StudentController@delete')->name('delete');
    Route::get('show/{id}' , 'StudentController@show')->name('show');
});

Route::group(['prefix'=>'major'] , function(){
    Route::get('list' , 'MajorController@showTable')->name('Majorlist');
    Route::get('insert' , 'MajorController@insert')->name('majorInsert');
    Route::post('create' , 'MajorController@create')->name('majorCreate');
    Route::get('edit/{id}' , 'MajorController@edit')->name('majorEdit');
    Route::post('update/{id}' , 'MajorController@update')->name('majorUpdate');
    Route::get('delete{id}' , 'MajorController@delete')->name('majorDelete');
    Route::get('show/{id}' , 'MajorController@show')->name('majorShow');
});

Route::get('excel-file', 'ExcelController@index')->name('excelFile');
Route::post('import-excel-file', 'ExcelController@importExcel')->name('importExcel');
Route::get('export-excel-file/{slug}', 'ExcelController@exportExcel')->name('exportExcel');

