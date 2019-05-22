<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'InicioController@index');

Route::group(['prefix' => 'admin','namespace'=>'Admin'],  function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/create', 'PermisoController@create')->name('crear_permiso');
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/create', 'MenuController@create')->name('crear_menu');
    Route::post('menu', 'MenuController@store')->name('guardar_menu');
}); 