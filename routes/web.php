<?php

Route::get('/', function () 
{
    return view('welcome');
});

Auth::routes();

//Route::get('/', 'PostController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('aeroplanes', 'AeroplanesController');

Route::name('ouraeroplanes')->get('ouraeroplanes')->uses('AeroplanesController@existing');
Route::name('addplaneform')->get('addplaneform')->uses('AeroplanesController@addplaneform');
Route::name('addplane')->get('addplane')->uses('AeroplanesController@addplane');



Route::resource('airports', 'AirportsController');
Route::name('listofairports')->get('listofairports')->uses('AirportsController@listofairports');
Route::name('addairportform')->get('addairportform')->uses('AirportsController@addairportform');
Route::name('addairport')->get('addairport')->uses('AirportsController@addairport');


Route::resource('accidents', 'AccidentsController');
Route::name('listofaccidents')->get('listofaccidents')->uses('AccidentsController@listofaccidents');
Route::name('addaccidentform')->get('addaccidentform')->uses('AccidentsController@addaccidentform');
Route::name('addaccident')->get('addaccident')->uses('AccidentsController@addaccident');



Route::resource('repaire', 'RepaireController');
Route::name('listofrepairs')->get('listofrepairs')->uses('RepaireController@listofrepairs');
Route::name('addrepairsform')->get('addrepairsform')->uses('RepaireController@addrepairsform');
Route::name('addrepair')->get('addrepair')->uses('RepaireController@addrepair');


Route::resource('reports', 'ReportsController');
Route::name('reportsspecification')->get('reportsspecification')->uses('ReportsController@reportsspecification');
Route::name('accidentreport')->get('accidentreport')->uses('ReportsController@accidentreport');
Route::name('repairereport')->get('repairereport')->uses('ReportsController@repairereport');


// for image upload view
Route::get('image-upload-with-validation',['as'=>'getuploadimage','uses'=>'ImageUploadController@getUploadImage']);
Route::post('image-upload-with-validation',['as'=>'postuplodeimage','uses'=>'ImageUploadController@postUplodeImage']);