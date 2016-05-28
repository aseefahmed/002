<?php

Route::group(['middleware' => 'web', 'prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
	Route::get('/', 'LoginController@index');
	Route::post('/process-login', 'LoginController@processLogin');
});