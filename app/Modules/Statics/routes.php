<?php

$namespace = '\App\Modules\Statics\Controllers';

Route::group(['middleware' => ['web'], 'prefix' => '/', 'namespace' => $namespace ], function(){

    Route::get('403', array('as' => 'page.403', 'uses' => 'BaseStaticsController@page403'));
    Route::get('404', array('as' => 'page.404', 'uses' => 'BaseStaticsController@page404'));

    Route::get('/', array('as' => 'SIndex', 'uses' => 'StaticsController@index'));

    Route::post('dang-ky', array('as' => 'site.pageContactPost', 'uses' => 'StaticsController@pageContactPost'));

});