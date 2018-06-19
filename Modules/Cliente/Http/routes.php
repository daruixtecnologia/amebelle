<?php

Route::group(['prefix' => 'v1/cliente', 'namespace' => 'Modules\Cliente\Http\Controllers'], function()
{
    Route::get('/', 'ClienteController@index');
    Route::post('/addCliente', 'ClienteController@create');
});
