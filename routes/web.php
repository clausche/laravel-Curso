<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'InicioController@index');

Route::group(['prefix' => 'admin','namespace'=>'Admin'],  function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/create', 'PermisoController@create')->name('crear_permiso');
});