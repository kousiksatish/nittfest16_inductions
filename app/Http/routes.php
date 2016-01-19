<?php



Route::get('/', 'HomeController@index');
Route::get('oc', 'HomeController@oc');
Route::post('oc', 'HomeController@oc_store');
Route::get('ambience', 'HomeController@ambience');
Route::post('ambience', 'HomeController@ambience_store');
Route::get('pr', 'HomeController@pr');
Route::post('pr', 'HomeController@pr_store');
